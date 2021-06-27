<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    //TODO: return by latest
    $posts = Post::with('category', 'author')->get();

    return view('posts', ['posts' => $posts]);

});

/**
 * Implicit biding
 * the post model with the matching id from the request is injected
 */
Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', [
        'post' => $post,
    ]);

});

Route::get('/categories/{category:slug}', function (Category $category) {

    return view('category', [
        'category' => $category,
    ]);

});

Route::get('/authors/{author:username}', function (User $author) {

    return view('posts', [
        'posts' => $author->posts->load(['category', 'author']),
    ]);

});
