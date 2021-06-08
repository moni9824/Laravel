<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
    return view('viewproducts');
    return viev('createproduct');
    return view('product.show');
    return view('product.edit');
});


Route::resource('products', ProductController::class);
Route::resource('create', ProductController::class);