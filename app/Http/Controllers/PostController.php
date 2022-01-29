<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use \Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

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

        return view('posts.create', [
            'categories' => Category::all()
        ]);
    }

    //todo move this in a Requests page
    public function store(Request $request)
    {
        $attributes = $request->validate([
            "title" => 'required|max:255',
            "slug" => 'required|max:255|unique:posts',
            "excerpt" => 'required|max:255',
            "body" => 'required',
            "category_id" => "required|exists:App\Models\Category,id",
        ]);

        $attributes['user_id'] = auth()->id();

        Post::create($attributes);

        return redirect(RouteServiceProvider::HOME)->with('success', 'Your blog post has been posted!');

    }

}
