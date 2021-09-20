<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/posts/{post:slug}', [PostController::class, 'show'])
    ->name('post');

Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/register', [UserController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionController::class, 'destroy']);
