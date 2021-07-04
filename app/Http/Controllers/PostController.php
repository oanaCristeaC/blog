<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index() {

        //TODO: return by latest
        $posts = Post::with('category', 'author')->get();
        $categories = Category::all();

        return view('posts.index', [
            'posts' => $posts,
            'categories' => $categories
        ]);

    }

    public function authorPosts(User $author) {

        $categories = Category::all();

        return view('posts.index', [
            'posts' => $author->posts,
            'categories' => $categories
        ]);

    }
}
