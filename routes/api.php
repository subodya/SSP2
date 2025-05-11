<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

//cart route resource carController
Route::resource('carts', \App\Http\Controllers\CartController::class)->only([
    'index', 'store', 'update', 'destroy'
]);
