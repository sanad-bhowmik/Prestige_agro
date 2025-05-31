<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/bd', function () {
    return view('welcomeBD');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/contactbd', function () {
    return view('contactbd');
});
Route::get('/salesteambd', [HomeController::class, 'salesteambd']);
Route::get('/salesteam', [HomeController::class, 'salesteam']);
Route::get('/teambd', [HomeController::class, 'teambd']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/product', [HomeController::class, 'product']);
Route::get('/productbd', [HomeController::class, 'productbd']);
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.details');
Route::get('/productbd/{id}', [ProductController::class, 'showbd'])->name('product.detailsbd');
Route::get('/insecticide', [ProductController::class, 'insecticide'])->name('product.insecticide');
Route::get('/insecticidebd', [ProductController::class, 'insecticidebd'])->name('product.insecticidebd');
Route::get('/fungicide', [ProductController::class, 'fungicide'])->name('product.fungicide');
Route::get('/fungicidebd', [ProductController::class, 'fungicidebd'])->name('product.fungicidebd');
Route::get('/herbicide', [ProductController::class, 'herbicide'])->name('product.herbicide');
Route::get('/herbicidebd', [ProductController::class, 'herbicidebd'])->name('product.herbicidebd');
Route::get('/micronutrients', [ProductController::class, 'micronutrients'])->name('product.micronutrients');
Route::get('/micronutrientsbd', [ProductController::class, 'micronutrientsbd'])->name('product.micronutrientsbd');



// Admin

Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/addProduct', [AdminController::class, 'addProduct'])->name('addProduct');
Route::post('/admin/add-product', [AdminController::class, 'storeProduct'])->name('admin.storeProduct');
Route::get('/allProduct', [AdminController::class, 'allProduct'])->name('allProduct');

Route::delete('/admin/products/{id}', [AdminController::class, 'deleteProduct'])->name('admin.deleteProduct');
Route::put('/admin/product/update/{id}', [AdminController::class, 'update'])->name('admin.updateProduct');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->route('admin.login');
})->name('logout');

// Admin
