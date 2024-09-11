<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StorecategoryRequest;
use App\Http\Requests\Dashboard\UpdateCategoryRequest;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{
    // protected $category;
    /**
     * Constructor with dependency injection (optional)
     */
    public function __construct(
        public Category $category
    ) {
        // $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $query =  $this->category::query();
        // dd(Category::pluck('id')->toArray());
        //  This return collection of 'objects' class not an array
        $categories = $this->category::filter($request->query())
            ->withCount(['products as products_count' => function ($query) {
                $query->where('status', 'active');
            }])
            ->with('parent')
            ->latest('id')
            ->paginate();
        // $categories = $this->category::all();
        // $categories = Category::status('archived')->paginate();
        // dd($categories);
        return view('dashboard.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parents = $this->category::all();
        return view('dashboard.categories.create', compact('parents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecategoryRequest $request)
    {
        /**
         * $request->input('name');
         * $request->post('name');
         * $request->query('name');
         * $request->get('name');
         * $request->name;
         * $request['name'];
         * $request->all();
         * $request->only(['name', 'parent_id']);
         * $request->except(['image', 'status']);
         */

        //  Validation data
        $category = $request->except('image');

        $category['image'] = $this->uploadImage($request);

        /**
         * Request Merge
         */
        // $request->merge([
        //     'slug' => Str::slug(),
        // ]);

        // $category['slug'] = Str::slug($category['name']);

        // Insert data into table
        $this->category::create($category);

        // PRG it's a redirect process
        return redirect()->back()->with('success', 'Category created successfully!');
    }

    public function show(Category $category)
    {

        dd($category->products()
            ->with('store:id,name')
            ->where('status', 'active')
            ->latest()
            ->get());
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        // try {
        //     $category = $this->category::findOrFail($id);
        // } catch (Exception $e) {
        //     abort(404);
        // return redirect()->route('dashboard.categories.index')->with('info','record not found!');
        // }

        $category = $this->category::findOrFail($id);

        // if (!$category) {
        //     abort(404);
        // }

        // SELECT * from categories where id <> $id AND (parent_id is null OR parent_id <> $id)
        // "select * from `categories` where `id` <> ? and (`parent_id` is null or `parent_id` <> ?)"
        $parents  = $this->category::where('id', '<>', $id)
            ->where(function ($query) use ($id) {
                $query->whereNull('parent_id')
                    ->Orwhere('parent_id', '<>', $id);
            })
            ->get();

        return view('dashboard.categories.edit', compact('parents', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        // dd($category->image);
        // $category = $this->category::findOrFail($id);

        $old_image = $category->image;

        $data = $request->except('image');

        $new_image = $this->uploadImage($request);

        if ($new_image) {
            $data['image'] = $new_image;
        }

        if ($old_image && $new_image) {
            Storage::disk('public')->delete($old_image);
        }


        $category->update($data);

        return to_route('dashboard.categories.index')
            ->with('success', 'Category Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        // Method 1
        // $category = $this->category::findOrFail($id);
        // $category->delete();

        // Method 2
        // $this->category::where('id', '=', $id)->delete();

        // Method 3
        // $this->category::destroy($id);

        /**
         * new way of deleting
         */

        DB::beginTransaction();
        try {
            $category->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
        }

        // $category = $this->category::findOrFail($id);

        // $category->delete();



        return redirect()
            ->back()
            ->with('success', 'Category Deleted Successfully!');
    }

    protected function uploadImage(Request $request)
    {
        if (!$request->hasFile('image')) {
            return;
        }

        if ($request->hasFile('image')) {
            $file  = $request->file('image'); // return object UploadedFile

            /**
             * ====================================
             *      Some Avalible Method
             * ====================================
             * $file->getClientMimeType(); image/png
             * $file->getClientOriginalName();
             * $file->getClientOriginalExtension();
             * $file->getSize();
             */

            $path  = $file->store('uploads', [
                'disk' => 'public'
            ]);

            return $path;
        }
    }

    public function trash()
    {
        $categories = $this->category::onlyTrashed()->paginate(3);

        return view('dashboard.categories.trash', compact('categories'));
    }

    public function restore(Request $request, $id)
    {
        $category = $this->category::onlyTrashed()->findOrFail($id);
        $category->restore();

        return redirect()->route('dashboard.categories.trash')->with('success', 'Category Restored Successfully!');
    }

    public function forceDelete($id)
    {
        $category = $this->category::onlyTrashed()->findOrFail($id);
        $category->forceDelete();

        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }

        return redirect()->route('dashboard.categories.trash')->with('success', 'Category Deleted forever Successfully!');
    }
}
