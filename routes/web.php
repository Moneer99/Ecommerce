<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/redirect', [HomeController::class, 'redirect'])->name('redirect');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/product', [AdminController::class, 'product'])->name('product');

Route::get('/showproduct', [AdminController::class, 'showproduct']);

Route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);

Route::get('/updateview/{id}', [AdminController::class, 'updateview']);

Route::post('/updateproduct/{id}', [AdminController::class, 'updateproduct']);

Route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);

Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::post('/addcart/{id}', [HomeController::class, 'addcart']);

Route::get('/showcart', [HomeController::class, 'showcart']);

Route::get('/deletecart/{id}', [HomeController::class, 'deletecart']);

Route::post('/order', [HomeController::class, 'order']);

Route::get('/showorder', [AdminController::class, 'showorder']);

Route::get('/status/{id}', [AdminController::class, 'status']);

Route::get('/allproducts', [HomeController::class, 'allproducts'])->name('allproducts');