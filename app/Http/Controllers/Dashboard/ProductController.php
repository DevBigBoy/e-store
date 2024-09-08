<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Scopes\StoreScope;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Product $product)
    {
        /**
         * Before Global Scope
         */
        // // 1. Retrieve the currently authenticated user
        // $user = Auth::user();

        // // 2. Check if the user has a store_id (meaning they own/manage a store)
        // if ($user->store_id) {
        //     // 3. If the user has a store_id, fetch the products for the user's store
        //     //    Eager load 'category' and 'store' relationships, and filter by store_id.
        //     //    Only products for the user's store will be shown, with pagination (5 per page).
        //     $products = Product::with(['category', 'store'])
        //         ->where('store_id', $user->store_id)
        //         ->paginate(5);
        // } else {
        //     // 4. If the user does not have a store_id, retrieve all products with pagination.
        //     $products = Product::with(['category', 'store'])->paginate(5);
        // }

        /**
         * After Global Scope
         */
        // $products = Product::withoutGlobalScope('store')->paginate(5);

        $products = Product::paginate(5);
        // $products = Product::withoutGlobalScope(StoreScope::class)->paginate(5);

        // 5. Return the 'dashboard.products.index' view with the products data.
        return view('dashboard.products.index', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::whereNull('parent_id')->with('children')->get();
        $stores = Store::all();
        return view('dashboard.products.create', compact('categories', 'stores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

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
    public function edit(Product $product)
    {
        $user = Auth::user();

        if (!$user->store_id || $user->store_id != $product->store_id) {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $user = Auth::user();

        if ($user->store_id != $product->store_id) {
            abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $user = Auth::user();

        if ($user->store_id != $product->store_id) {
            abort(404);
        }
    }
}
