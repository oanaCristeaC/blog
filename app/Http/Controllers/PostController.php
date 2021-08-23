<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::with('category', 'author')
                    ->filter(request(['search', 'category']))->get()
        ]);

    }

    public function show (Post $post)
    {
        return view('posts.show', [
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
