<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Dashboard\StorecategoryRequest;

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
        $category = $request->validated();

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
        $parents  = $this->category::all();
        $category = $this->category::findOrFail($id);
        return view('dashboard.categories.edit', compact('parents', 'category'));
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
        $this->category::destroy($id);

        return redirect()->back()->with('success', 'Category Deleted Successfully!');
    }
}