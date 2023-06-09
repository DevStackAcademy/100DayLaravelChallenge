<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/',            [PageController::class, 'blog'])->name('blog');
Route::get('/{post:slug}', [PageController::class, 'post'])->name('post');
