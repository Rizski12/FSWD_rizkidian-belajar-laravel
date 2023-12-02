<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\Products;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index(Request $request)
    {
        
        $categories = ProductCategory::where('is_active', true)->get();
        $selectedCategory = $request->input('category');

        $productsQuery = Products::where('is_active', true)->where('stock', '>', 0);

        if ($selectedCategory) {
            $productsQuery->where('category_id', $selectedCategory);
        }
        $searchQuery = $request->input('search');

        if ($searchQuery) {
            $productsQuery->where('product_name', 'like', '%' . $searchQuery . '%');
        }
        
        $featuredProducts = $productsQuery->paginate(12);

        return view('pages.index', [
            'categories' => $categories,
            'selectedCategory' => $selectedCategory,
            'featuredProducts' => $featuredProducts,
        ]);
    }

}
