<?php

namespace App\Http\Controllers;

use App\Models\Post;
use \Illuminate\Http\Response;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::with('category', 'author')
                    ->filter(request(['search', 'category', 'author']))->paginate(10)->withQueryString()
        ]);
    }

    public function show (Post $post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);

    }
    // The simples way to create a protected route
    // but IS NOT GOOD
    public function create()
    {
        if (auth()->guest() || auth()->user() && auth()->user()->username !== 'ionelacristea'){
            abort(Response::HTTP_FORBIDDEN);
        }

        return view('posts.create');
    }

}
