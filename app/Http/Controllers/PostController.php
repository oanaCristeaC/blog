<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('posts.index', [
            'posts' => Post::with('category', 'author')->filter(request(['search']))->get(),
            'categories' => $categories
        ]);

    }

    public function show (Post $post)
    {
        return view('post', [
            'post' => $post,
        ]);

    }

        public function authorPosts(User $author)
    {

        $categories = Category::all();

        return view('posts.index', [
            'posts' => $author->posts,
            'categories' => $categories
        ]);

    }

}
