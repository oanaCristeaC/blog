<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::with('category', 'author');  //TODO: return by latest

        if (request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }

        // $result = $posts->filter( request(['search', 'category', 'author']));

        $categories = Category::all();

        return view('posts.index', [
            'posts' => $posts->get(),
            'categories' => $categories
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
