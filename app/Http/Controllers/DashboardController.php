<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        // Mengambil data dasar
        $totalProducts = Products::count();
        $totalCategories = Products::distinct('category_id')->count();
        $totalPrice = Products::sum('price');
        $totalStock = Products::sum('stock');

        // Mengambil data untuk chart
        $categories = ProductCategory::with('products')->get();
        $categoryNames = [];
        $totalProductsPerCategory = [];
        $totalPricePerCategory = [];
        $totalStockPerCategory = [];

        foreach ($categories as $category) {
            $categoryNames[] = $category->category_name;

            // Menghitung jumlah produk per kategori
            $totalProduct = $category->products->count();
            $totalProductsPerCategory[] = $totalProduct;

            // Menghitung total harga per kategori
            $totalPrices = $category->products->sum('price');
            $totalPricePerCategory[] = $totalPrices;

            // Menghitung jumlah stok per kategori
            $totalStocks = $category->products->sum('stock');
            $totalStockPerCategory[] = $totalStocks;
        }

        return view('pages.dashboard', compact(
            'categoryNames',
            'totalProductsPerCategory',
            'totalPricePerCategory',
            'totalStockPerCategory',
            'totalProducts',
            'totalCategories',
            'totalPrice',
            'totalStock'
        ));
    }

    public function profile() {
        return view('pages.profile');
    }
}
