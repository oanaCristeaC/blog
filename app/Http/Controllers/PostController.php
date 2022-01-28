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

    public function create()
    {
        return view('posts.create');
    }

}
