<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminProductController;
use App\Http\Middleware\EnsureUserIsAuthenticated;


Route::get('/', function () {
    return view('index');
});

Route::get('/thankyou', function () {
    return view('success');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/fancyStore', function () {
    return view('fancyStore');
});

Route::get('/products', function () {
    return view('product');
});

use App\Http\Controllers\MailController;

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact/send', [MailController::class, 'send'])->name('contact.send');


// Authentication Routes (Login and Logout)
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Route::get('/admin', [App\Http\Controllers\AdminProductController::class, 'index'])->name('admin.products');
// Route::get('/admin/products/create', [App\Http\Controllers\AdminProductController::class, 'create'])->name('admin.products.create');
// Route::post('/admin/products', [App\Http\Controllers\AdminProductController::class, 'store'])->name('admin.products.store');
// Route::get('/admin/products/{product}/edit', [App\Http\Controllers\AdminProductController::class, 'edit'])->name('admin.products.edit');
// Route::put('/admin/products/{product}', [App\Http\Controllers\AdminProductController::class, 'update'])->name('admin.products.update');
// Route::delete('/admin/products/{product}', [App\Http\Controllers\AdminProductController::class, 'destroy'])->name('admin.products.destroy');


Route::middleware([EnsureUserIsAuthenticated::class])->group(function () {
    Route::get('/admin', [App\Http\Controllers\AdminProductController::class, 'index'])->name('admin.products');
    Route::get('/admin/products/create', [App\Http\Controllers\AdminProductController::class, 'create'])->name('admin.products.create');
    Route::post('/admin/products', [App\Http\Controllers\AdminProductController::class, 'store'])->name('admin.products.store');
    Route::get('/admin/products/{product}/edit', [App\Http\Controllers\AdminProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/admin/products/{product}', [App\Http\Controllers\AdminProductController::class, 'update'])->name('admin.products.update');
    Route::delete('/admin/products/{product}', [App\Http\Controllers\AdminProductController::class, 'destroy'])->name('admin.products.destroy');
});

// Display Products to Viewers
Route::get('/products', function () {
    $products = App\Models\Product::all();
    return view('product', compact('products'));
});
