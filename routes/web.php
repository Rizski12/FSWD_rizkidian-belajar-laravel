<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\CrudProductController;
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

Route::get('/crud', [CrudProductController::class, 'index'])->name('crud.index');
Route::get('/crud/create', [CrudProductController::class, 'create'])->name('crud.create');
Route::post('/crud', [CrudProductController::class, 'store'])->name('crud.store');
Route::get('/crud/{product}/edit', [CrudProductController::class, 'edit'])->name('crud.edit');
Route::put('/crud/{product}', [CrudProductController::class, 'update'])->name('crud.update');
Route::delete('/crud/{product}', [CrudProductController::class, 'destroy'])->name('crud.destroy');
