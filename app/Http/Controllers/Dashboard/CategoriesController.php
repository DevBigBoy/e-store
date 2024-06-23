<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Dashboard\StorecategoryRequest;
use App\Http\Requests\Dashboard\UpdateCategoryRequest;
use Exception;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{
    protected $category;
    /**
     * Constructor with dependency injection (optional)
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //  This return collection of 'objects' class not an array
        $categories = $this->category::all();
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

        $category['slug'] = Str::slug($category['name']);

        // Insert data into table
        $this->category::create($category);

        // PRG it's a redirect process
        return redirect()->back()->with('success', 'Category created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(UpdateCategoryRequest $request, string $id)
    {
        $category = $this->category::findOrFail($id);

        $old_image = $category->image;

        $newcategory = $request->except('image');

        $newcategory['image'] = $this->uploadImage($request);


        if ($old_image && $category['image']) {
            Storage::disk('public')->delete($old_image);
        }


        $category->update($newcategory);

        return redirect()
            ->back()
            ->with('success', 'Category Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Method 1
        // $category = $this->category::findOrFail($id);
        // $category->delete();

        // Method 2
        // $this->category::where('id', '=', $id)->delete();

        // Method 3
        // $this->category::destroy($id);

        $category = $this->category::findOrFail($id);

        $category->delete();

        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }

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
}
