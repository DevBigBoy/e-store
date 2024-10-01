<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Traits\FileControlTrait;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\CategoryStoreRequest;
use App\Http\Requests\Admin\Category\CategoryUpdateRequest;

class CategoryContoller extends Controller
{
    use FileControlTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filters = $request->query();

        $categories = Category::filter($filters)
            ->withCount(['products as products_count' => function ($query) {
                $query->where('status', 'active');
            }])
            ->with(['parent:id,name_en'])
            ->latest()
            ->paginate(5);

        // Fetch only parent categories (parent_id is null) for the category dropdown
        $parentCategories = Category::whereNull('parent_id')->get();

        return view('admin.category.index', [
            'categories' => $categories,
            'parents' => $parentCategories,
            'filters' => $filters,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select(
            [
                'id',
                'name_en',
                'name_ar',
                'parent_id',
            ]
        )->where('status', 'active')
            ->get();
        // return dd($categories);
        return view('admin.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'categories');
        }

        Category::create($data);

        $notification = [
            'message' => 'Category Created successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('dashboard.categories.index')->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $parents = Category::select([
            'id',
            'name_en',
            'name_ar',
        ])
            ->where('status', 'active')
            ->where('id', '<>', $category->id)
            ->where(function ($query) use ($category) {
                $query->whereNull('parent_id')
                    ->Orwhere('parent_id', '<>', $category->id);
            })
            ->get();

        // dd($category->status);
        return view('admin.category.edit', compact('category', 'parents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        try {
            $data = $request->validated();

            if ($request->hasFile('image')) {
                $this->deleteFile($category->image);
                $data['image'] = $this->uploadFile($request->file('image'), 'categories');
            }

            $category->update($data);

            $notification = [
                'message' => 'Category Updated successfully!',
                'alert-type' => 'success'
            ];

            return redirect()->route('dashboard.categories.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Update Fail Try again ' . $e->getMessage(),
                'alert-type' => 'error'
            ];
            return redirect()->route('dashboard.categories.index')->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        DB::beginTransaction();
        try {
            $category->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
        }

        $notification = [
            'message' => 'Category Deleted successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('dashboard.categories.index')->with($notification);
    }

    public function trash()
    {
        $categories =  Category::onlyTrashed()->paginate(5);
        return view('admin.category.trash', compact('categories'));
    }

    public function restore(string $id)
    {
        $category = Category::onlyTrashed()->findOrFail($id);
        $category->restore();

        $notification = [
            'message' => 'Category Restored successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('dashboard.categories.trash')->with($notification);
    }

    public function forceDelete(string $id)
    {
        $category = Category::onlyTrashed()->findOrFail($id);
        $category->forceDelete();

        if ($category->image) {
            $this->deleteFile($category->image);
        }

        $notification = [
            'message' => 'Category Completely Deleted successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('dashboard.categories.trash')->with($notification);
    }
}
