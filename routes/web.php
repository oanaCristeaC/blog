<?php

use App\Http\Controllers\NewslettersController;
use App\Http\Controllers\PostCommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;

use App\Http\Controllers\Admin\PostsController as AdminPostController;


Route::get('/', [PostController::class, 'index'])->name('home');


// Admin CRUD posts

Route::get('admin/posts', [AdminPostController::class, 'index'])->middleware('admin')
    ->name('admin.posts.index');

Route::get('admin/posts/create', [AdminPostController::class, 'create'])->middleware('admin')
    ->name('admin.post.create');

Route::post('admin/posts', [AdminPostController::class, 'store'])->middleware('admin')
    ->name('admin.posts.store');

Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->middleware('admin')
    ->name('admin.posts.edit');

Route::patch('admin/posts/{post}', [AdminPostController::class, 'update'])->middleware('admin')
    ->name('admin.posts.update');

Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy'])->middleware('admin')
    ->name('admin.posts.destroy');
// End admin CRUD

Route::get('/posts/{post:slug}', [PostController::class, 'show'])
    ->name('post');

Route::post('/posts/{post:slug}/comments', [PostCommentController::class, 'store'])
    ->name('comment');

Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/register', [UserController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::post('/newsletters', [NewslettersController::class, 'create']);

