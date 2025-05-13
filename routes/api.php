<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });

//cart route resource carController
Route::resource('carts', \App\Http\Controllers\CartController::class)->only([
    'index', 'store', 'update', 'destroy'
]);

//product route resource productController
Route::post('/products', [\App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
//product delete
Route::delete('/products/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');


//category route resource categoryController
Route::resource('categories', \App\Http\Controllers\CategoryController::class)->only([
    'index', 'store', 'update', 'destroy'
]);

//sub-category route resource subCategoryController
Route::resource('subcategories', \App\Http\Controllers\SubCategoryController::class)->only([
    'index', 'store', 'update', 'destroy'
]);

//api/users/login
Route::post('/users/login', [\App\Http\Controllers\UserController::class, 'login'])->name('users.login');