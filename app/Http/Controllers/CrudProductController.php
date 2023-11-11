<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class CrudProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(10);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = ProductCategory::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'product_code' => 'required',
            'unit' => 'required',
            'discount_amount' => 'required',
            'stock' => 'required',
        ]);

        Product::create($request->all());

        return redirect()->route('crud.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $categories = ProductCategory::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'product_code' => 'required',
            'unit' => 'required',
            'discount_amount' => 'required',
            'stock' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('crud.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('crud.index')->with('success', 'Product deleted successfully.');
    }
}
