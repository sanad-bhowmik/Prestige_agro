<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/salesteam', [HomeController::class, 'salesteam']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/product', [HomeController::class, 'product']);
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.details');
Route::get('/insecticide', [ProductController::class, 'insecticide'])->name('product.insecticide');
Route::get('/fungicide', [ProductController::class, 'fungicide'])->name('product.fungicide');
Route::get('/herbicide', [ProductController::class, 'herbicide'])->name('product.herbicide');
Route::get('/micronutrients', [ProductController::class, 'micronutrients'])->name('product.micronutrients');
