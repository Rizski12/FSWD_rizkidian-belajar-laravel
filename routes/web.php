<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/biodata', [BiodataController::class, 'showBiodata'])->name('biodata');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

Route::get('/products', [ProductController::class, 'products'])->name('products');
