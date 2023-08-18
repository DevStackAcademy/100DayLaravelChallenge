<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'dashboard'])
    ->middleware('auth')
    ->name('dashboard');

Route::delete('posts/{post}', [PostController::class, 'destroy'])
    //->can('delete', 'post')
    //->middleware('auth', 'can:delete,post')
    ->middleware('auth')
    ->name('posts.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
