<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('products',            [ProductController::class, 'index']);
Route::get('products/collection', [ProductController::class, 'collection'])->name('products.export.collection');
Route::get('products/view',       [ProductController::class, 'view'])->name('products.export.view');
