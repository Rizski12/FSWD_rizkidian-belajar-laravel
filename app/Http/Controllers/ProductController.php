<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function products()
    {
        $produk = [
            [
                'nama' => 'Helm',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'toko' => '@RizskiShop',
                'harga' => 100,
                'gambar' => 'assets/images/kategori/helm.jpg',
                'badge' => 'HOT',
            ],
            [
                'nama' => 'Laptop Asus',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'toko' => '@RizskiShop',
                'harga' => 150,
                'gambar' => 'assets/images/produk/asusku.jpg',
                'badge' => 'Sold Out',
            ],
            [
                'nama' => 'Jaket',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'toko' => '@RizskiShop',
                'harga' => 160,
                'gambar' => 'assets/images/produk/jaket.jpg',
                'badge' => 'HOT',
            ],
            [
                'nama' => 'Kipas Angin',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'toko' => '@RizskiShop',
                'harga' => 130,
                'gambar' => 'assets/images/produk/kipas.jpg',
                'badge' => 'HOT',
            ],
            [
                'nama' => 'Tas Eiger',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'toko' => '@RizskiShop',
                'harga' => 120,
                'gambar' => 'assets/images/produk/eiger.jpg',
                'badge' => 'Sold Out',
            ],
            [
                'nama' => 'Jam Tangan',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'toko' => '@RizskiShop',
                'harga' => 100,
                'gambar' => 'assets/images/produk/jam.jpg',
                'badge' => 'HOT',
            ],
            [
                'nama' => 'Pulpen',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'toko' => '@RizskiShop',
                'harga' => 50,
                'gambar' => 'assets/images/produk/pulpen.jpg',
                'badge' => 'HOT',
            ],
            [
                'nama' => 'Vivo',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'toko' => '@RizskiShop',
                'harga' => 150,
                'gambar' => 'assets/images/produk/vivo.jpg',
                'badge' => 'Sold Out',
            ],
            [
                'nama' => 'Blender',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'toko' => '@RizskiShop',
                'harga' => 170,
                'gambar' => 'assets/images/produk/blender.jpg',
                'badge' => 'Sold Out',
            ],
            [
                'nama' => 'Baju Cowo',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'toko' => '@RizskiShop',
                'harga' => 110,
                'gambar' => 'assets/images/produk/bajucowo.jpg',
                'badge' => 'HOT',
            ],
            [
                'nama' => 'Jam Tangan Wanita',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'toko' => '@RizskiShop',
                'harga' => 100,
                'gambar' => 'assets/images/produk/jamwanita.jpg',
                'badge' => 'HOT',
            ],
            [
                'nama' => 'Helm LTD Sport',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'toko' => '@RizskiShop',
                'harga' => 180,
                'gambar' => 'assets/images/produk/helmltd.jpg',
                'badge' => 'Sold Out',
            ],
        ];

        foreach ($produk as &$product) {
            $product['gambar'] = asset($product['gambar']);
        }

        return view('pages.products', compact('produk'));
    }
}
