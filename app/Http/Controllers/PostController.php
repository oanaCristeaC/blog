<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {

        //TODO: return by latest
        $posts = Post::with('category', 'author')->get();

        return view('posts.index', ['posts' => $posts]);

    }
}
