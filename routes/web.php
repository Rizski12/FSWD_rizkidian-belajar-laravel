<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\CrudProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\AuthController;
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




Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth', 'check.user'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/crud', [CrudProductController::class, 'index'])->name('crud.index');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::get('/products', [ProductController::class, 'products'])->name('products');
    Route::get('/crud/create', [CrudProductController::class, 'create'])->name('crud.create');
    Route::post('/crud', [CrudProductController::class, 'store'])->name('crud.store');
    Route::get('/crud/{product}/edit', [CrudProductController::class, 'edit'])->name('crud.edit');
    Route::put('/crud/{product}', [CrudProductController::class, 'update'])->name('crud.update');
    Route::delete('/crud/{product}', [CrudProductController::class, 'destroy'])->name('crud.destroy');
    Route::get('/biodata', [BiodataController::class, 'showBiodata'])->name('biodata');

});




// Route::get('/biodata', [BiodataController::class, 'showBiodata'])->name('biodata');

// Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');

// Route::get('/products', [ProductController::class, 'products'])->name('products');

// Route::get('/crud', [CrudProductController::class, 'index'])->name('crud.index');
// Route::get('/crud/create', [CrudProductController::class, 'create'])->name('crud.create');
// Route::post('/crud', [CrudProductController::class, 'store'])->name('crud.store');
// Route::get('/crud/{product}/edit', [CrudProductController::class, 'edit'])->name('crud.edit');
// Route::put('/crud/{product}', [CrudProductController::class, 'update'])->name('crud.update');
// Route::delete('/crud/{product}', [CrudProductController::class, 'destroy'])->name('crud.destroy');
