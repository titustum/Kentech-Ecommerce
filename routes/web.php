<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WelcomeController::class, 'index'])->name("home");


Route::view('/products', 'welcome')->name("products");
Route::view('/categories/show', 'welcome')->name("categories.show");


use App\Http\Controllers\ContentManagementController;

Route::get('/admin/upload', [ContentManagementController::class, 'showForm'])->name('admin.upload');
Route::post('/admin/upload/category', [ContentManagementController::class, 'storeCategory'])->name('admin.upload.category');
Route::post('/admin/upload/product', [ContentManagementController::class, 'storeProduct'])->name('admin.upload.product');
Route::post('/admin/upload/testimonial', [ContentManagementController::class, 'storeTestimonial'])->name('admin.upload.testimonial');




Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


require __DIR__.'/auth.php';
