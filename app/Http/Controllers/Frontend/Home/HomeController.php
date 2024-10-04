<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

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

        return view('frontend.index', [
            'products' => $products
        ]);
    }
}
