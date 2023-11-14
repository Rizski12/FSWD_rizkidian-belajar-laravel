<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class CrudProductController extends Controller
{
    public function index()
    {
        $products = Products::with('category')->paginate(10);
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
            'product_code' => 'required|unique:products',
            'unit' => 'required',
            'discount_amount' => 'required',
            'stock' => 'required',
        ]);

        // Cek apakah product_code sudah ada
        $existingProduct = Products::where('product_code', $request->input('product_code'))->first();

        if ($existingProduct) {
            // Menggunakan session untuk menyimpan pesan kesalahan
            session()->flash('error', 'Failed to create product. Product code already exists.');
            return redirect()->route('crud.index');
        }


        Products::create($request->all());
        session()->flash('success', 'Product created successfully.');

        return redirect()->route('crud.index');
    }

    public function edit(Products $product)
    {
        $categories = ProductCategory::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Products $product)
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

        session()->flash('success', 'Product updated successfully.');

        return redirect()->route('crud.index');
    }

    public function destroy(Products $product)
    {
        $product->delete();

        session()->flash('success', 'Product deleted successfully.');

        return redirect()->route('crud.index');
    }
}
