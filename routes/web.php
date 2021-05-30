<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
    $files = File::files(public_path("files/posts/"));

    $posts = array_map(function($file) {
        $document = YamlFrontMatter::parseFile($file);
        return new Post($document->title, $document->slug, $document->body(), $document->date, $document->excerpt);

    }, $files);

    return view('home', ['posts' => $posts]);

});

Route::get('/posts/{post}', function ($postSlug) {
    
    $post = Post::find($postSlug);

    return view('post', [
        'post' => $post,
    ]);

})->where('post', '[A-z_\-]+');