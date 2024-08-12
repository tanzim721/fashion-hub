<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductSelectionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/{id}', [ProductController::class, 'index']);
Route::post('/product/selections', [ProductSelectionController::class, 'store'])->name('product.selections.store');



