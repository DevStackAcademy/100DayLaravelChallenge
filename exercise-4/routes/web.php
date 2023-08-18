<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'web']);

Route::get('/users/excel', [UserController::class, 'excel'])->name('users.excel');
Route::get('/users/csv',   [UserController::class, 'csv'])->name('users.csv');
Route::get('/users/pdf',   [UserController::class, 'pdf'])->name('users.pdf');
Route::get('/users/html',  [UserController::class, 'html'])->name('users.html');