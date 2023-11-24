<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductAPIController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return response()->json([
            'status' => 'success',
            'message' => 'Data ditemukan',
            'data' => $products,
        ]);
    }

    public function show($id)
    {
        $product = Products::with('category')->find($id);
        if (!$product) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data tidak ditemukan',
                'data' => null,
            ], 404);
        } else {
            return response()->json([
                'status' => 'success',
                'message' => 'Data ditemukan',
                'data' => $product,
            ]);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'product_code' => 'required|unique:products',
            'unit' => 'required',
            'discount_amount' => 'required',
            'stock' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data tidak valid',
                'data' => $validator->errors(),
            ], 422);
        }

         // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('images/products', $imageName);
        } else {
            $imageName = null;
        }

        $product = Products::create(array_merge($request->all(), ['image' => $imageName]));

        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil dibuat',
            'data' => $product,
        ]);
    }

    public function update(Request $request, $id)
    {
        $product = Products::find($id);

        if (!$product) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data produk tidak ditemukan',
            ], 404);
        }

        
        $validator = Validator::make($request->all(), [
            'product_name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'product_code' => 'required|unique:products,product_code,'.$id,
            'unit' => 'required',
            'discount_amount' => 'required',
            'stock' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data tidak valid',
                'data' => $validator->errors(),
            ], 422);
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('images/products', $imageName);
            $product->image = $imageName;
        }

        $product->update($request->except('image'));

        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil diupdate',
            'data' => $product,
        ]);
    }

    public function destroy($id)
    {
        $product = Products::find($id);

        if (!$product) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $product->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil dihapus',
        ]);
    }
}
