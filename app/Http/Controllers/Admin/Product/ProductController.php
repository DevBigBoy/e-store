<?php

namespace App\Http\Controllers\Admin\Product;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Traits\FileControlTrait;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\Product\ProductStoreRequest;
use App\Http\Requests\Admin\Product\ProductUpdateRequest;

class ProductController extends Controller
{
    use FileControlTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = Product::where('store_id', Auth::user()->store_id)
            ->with(['category:id,name_en,name_ar,parent_id', 'store:id,name'])
            ->latest()
            ->paginate(5);

        return view('admin.product.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::whereNull('parent_id')
            ->with('children:id,name_en,name_ar,parent_id')
            ->get();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'), 'products');
        }

        $data['store_id'] = Auth::user()->store_id;

        Product::create($data);

        $notification = [
            'message' => 'Product Created successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('dashboard.products.index')->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $parents = Category::WhereNull('parent_id')
            ->with('children:id,name_en,name_ar,parent_id')
            ->get();
        return view('admin.product.edit', compact('product', 'parents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        $user = Auth::user()->store_id;

        if ($user != $product->store_id) {
            $notification = [
                'message' => 'You are Unauthorized',
                'alert-type' => 'Error'
            ];

            return redirect()->route('dashboard.products.index')->with($notification);
        }

        $data = $request->validated();

        if ($request->hasFile('image')) {
            $this->deleteFile($product->image);
            $data['image'] = $this->uploadFile($request->file('image'), 'products');
        }

        $product->update($data);

        $notification = [
            'message' => 'Product Updated successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('dashboard.products.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        DB::beginTransaction();
        try {
            $product->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
        }

        $notification = [
            'message' => 'Product Deleted successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('dashboard.products.index')->with($notification);
    }

    public function trash()
    {
        $products = Product::onlyTrashed()
            ->with(['category:id,name_en,name_ar,parent_id', 'store:id,name'])
            ->latest()
            ->paginate(5);
        return view('admin.product.trash', compact('products'));
    }

    public function restore(string $product)
    {
        $product = Product::onlyTrashed()->findOrFail($product);
        $product->restore();

        $notification = [
            'message' => 'Product Restored successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('dashboard.products.index')->with($notification);
    }

    public function foreDelete(string $product)
    {
        $product = Product::withTrashed()->findOrFail($product);
        $product->foreDelete();

        if ($product->image) {
            $this->deleteFile($product->image);
        }

        $notification = [
            'message' => 'Product completely successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('dashboard.products.index')->with($notification);
    }
}
