<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\CrudProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsersController;

use App\Http\Middleware\CheckUserRole;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\TokoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Validation\UnauthorizedException;
use App\Http\Controllers\UnauthorizedController;
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



Route::middleware(['auth', 'group.access:2'])->group(function () {
    Route::get('/toko', [TokoController::class, 'index'])->name('toko');
});

Route::get('/', [LandingPageController::class, 'showLanding'])->name('landing');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth', 'group.access:1,3'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::get('/products', [ProductController::class, 'products'])->name('products');
    Route::get('/biodata', [BiodataController::class, 'showBiodata'])->name('biodata');
    // CRUD Produk
    Route::get('/crud', [CrudProductController::class, 'index'])->name('crud.index');
    Route::get('/crud/create', [CrudProductController::class, 'create'])->name('crud.create');
    Route::post('/crud', [CrudProductController::class, 'store'])->name('crud.store');
    Route::get('/crud/{product}/edit', [CrudProductController::class, 'edit'])->name('crud.edit');
    Route::put('/crud/{product}', [CrudProductController::class, 'update'])->name('crud.update');
    Route::delete('/crud/{product}', [CrudProductController::class, 'destroy'])->name('crud.destroy');;
    
    Route::get('/unauthorized', [UnauthorizedController::class, 'showUnauthorized'])->name('unauthorized');

    // Jika grup ID 1 (role admin), bisa akses CRUD Users dan CRUD Products
    Route::middleware('group.access:1')->group(function () {
        //CRUD Users
        Route::get('/users', [UsersController::class, 'index'])->name('users.index');
        Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
        Route::post('/users', [UsersController::class, 'store'])->name('users.store');
        Route::get('/users/{user}/edit', [UsersController::class, 'edit'])->name('users.edit');
        Route::put('/users/{user}', [UsersController::class, 'update'])->name('users.update');
        Route::delete('/users/{user}', [UsersController::class, 'destroy'])->name('users.destroy');
       
        
    });
    
    
    // Jika grup ID 3 (role lain), hanya bisa akses CRUD Products
    // Route::middleware('group.access:3')->group(function () {
    //     // CRUD Produk
    //     Route::get('/crud', [CrudProductController::class, 'index'])->name('crud.index');
    //     Route::get('/crud/create', [CrudProductController::class, 'create'])->name('crud.create');
    //     Route::post('/crud', [CrudProductController::class, 'store'])->name('crud.store');
    //     Route::get('/crud/{product}/edit', [CrudProductController::class, 'edit'])->name('crud.edit');
    //     Route::put('/crud/{product}', [CrudProductController::class, 'update'])->name('crud.update');
    //     Route::delete('/crud/{product}', [CrudProductController::class, 'destroy'])->name('crud.destroy');;
    //     });
    });




// Route::middleware(['auth', 'check.user'])->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//     Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
//     Route::get('/products', [ProductController::class, 'products'])->name('products');
    
//     // CRUD Produk
//     Route::get('/crud', [CrudProductController::class, 'index'])->name('crud.index');
//     Route::get('/crud/create', [CrudProductController::class, 'create'])->name('crud.create');
//     Route::post('/crud', [CrudProductController::class, 'store'])->name('crud.store');
//     Route::get('/crud/{product}/edit', [CrudProductController::class, 'edit'])->name('crud.edit');
//     Route::put('/crud/{product}', [CrudProductController::class, 'update'])->name('crud.update');
//     Route::delete('/crud/{product}', [CrudProductController::class, 'destroy'])->name('crud.destroy');
    
//     //CRUD Users
//     Route::get('/users', [UsersController::class, 'index'])->name('users.index');
//     Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
//     Route::post('/users', [UsersController::class, 'store'])->name('users.store');
//     Route::get('/users/{user}/edit', [UsersController::class, 'edit'])->name('users.edit');
//     Route::put('/users/{user}', [UsersController::class, 'update'])->name('users.update');
//     Route::delete('/users/{user}', [UsersController::class, 'destroy'])->name('users.destroy');

//     Route::get('/biodata', [BiodataController::class, 'showBiodata'])->name('biodata');


// });
