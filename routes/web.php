<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WelcomeController::class, 'index'])->name("home");


Route::view('/products', 'welcome')->name("products");
Route::view('/categories/show', 'welcome')->name("categories.show");
Route::view('/admin/orders/show', 'admin.orders')->name("orders.show");
Route::view('/admin/products/show', 'admin.products')->name("admin.products.show");
Route::view('/admin/customers/show', 'admin.customers')->name("admin.customers.show");
Route::get('/admin/product/create', [ProductController::class, 'create'])->name("admin.product.create");
Route::post('/admin/upload-product', [ProductController::class, 'uploadProduct'])->name('admin.upload.product');


use App\Http\Controllers\ContentManagementController;

Route::get('/admin/upload', [ContentManagementController::class, 'showForm'])->name('admin.upload');
Route::post('/admin/upload/category', [ContentManagementController::class, 'storeCategory'])->name('admin.upload.category');
// Route::post('/admin/upload/product', [ContentManagementController::class, 'storeProduct'])->name('admin.upload.product');
Route::post('/admin/upload/testimonial', [ContentManagementController::class, 'storeTestimonial'])->name('admin.upload.testimonial');




Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


require __DIR__.'/auth.php';
