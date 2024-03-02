<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryContoller extends Controller
{
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}