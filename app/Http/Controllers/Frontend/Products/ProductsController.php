<?php

namespace App\Http\Controllers\Frontend\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend.products.index');
    }

    public function show(Product  $product)
    {
        if ($product->status != 'active') {
            abort(404);
        }

        return view('frontend.products.show', compact('product'));
    }
}