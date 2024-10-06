<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        $products = Product::active()
            ->latest()
            ->limit(8)
            ->get();

        $categories = Category::whereNull('parent_id')
            ->with('children')
            ->get();


        return view('frontend.index', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}