<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CareerController;
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
Route::get('/career', [CareerController::class, 'career']);
Route::get('/careerbd', [CareerController::class, 'careerbd']);
Route::get('/photo', [HomeController::class, 'photo']);
Route::get('/video', [HomeController::class, 'video']);
Route::get('/videobd', [HomeController::class, 'videobd']);
Route::get('/photobd', [HomeController::class, 'photobd']);
Route::get('/salesteambd', [HomeController::class, 'salesteambd']);
Route::get('/salesteam', [HomeController::class, 'salesteam']);
Route::get('/teambd', [HomeController::class, 'teambd']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/notice', [HomeController::class, 'notice']);
Route::get('/noticebd', [HomeController::class, 'noticebd']);
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
Route::get('/jobCircular', [AdminController::class, 'jobCircular'])->name('jobCircular');
Route::post('/career/store', [AdminController::class, 'storeJob'])->name('career.store');
Route::get('/jobCircularList', [AdminController::class, 'jobCircularList'])->name('jobCircularList');
Route::delete('/careers/{id}', [AdminController::class, 'destroy'])->name('careers.destroy');

Route::get('/addPhoto', [AdminController::class, 'addPhoto'])->name('photo');
Route::post('/photos', [AdminController::class, 'store'])->name('photos.store');
Route::get('/addVideo', [AdminController::class, 'addVideo'])->name('addVideo');
Route::post('/videos', [AdminController::class, 'Vstore'])->name('videos.Vstore');
Route::delete('/admin/products/{id}', [AdminController::class, 'deleteProduct'])->name('admin.deleteProduct');
Route::put('/admin/product/update/{id}', [AdminController::class, 'update'])->name('admin.updateProduct');
Route::get('/addVideoPhoto', [AdminController::class, 'addVideoPhoto'])->name('addVideoPhoto');
Route::delete('/photos/{id}', [AdminController::class, 'Pdestroy'])->name('photos.Pdestroy');
Route::delete('/videos/{id}', [AdminController::class, 'Vdestroy'])->name('videos.Vdestroy');
Route::get('/addNotice', [AdminController::class, 'addNotice'])->name('Notice');
Route::post('/notices', [AdminController::class, 'storeNotice'])->name('notice.store');
Route::get('/noticeList', [AdminController::class, 'noticeList'])->name('noticeList');
Route::delete('/notices/{id}', [AdminController::class, 'destroynotice'])->name('notices.destroynotice');



Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->route('admin.login');
})->name('logout');

// Admin
