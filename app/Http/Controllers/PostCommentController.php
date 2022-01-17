<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{
    public function store(Post $post, Request $request)
    {

        if (empty($request->user()->id)) {
            return redirect(RouteServiceProvider::LOGIN);
        }

        $request->validate([
            'comment' => 'required'
        ]);

        // Access comments function from the post
        $post->comments()->create([
            'post_id' => $post->id,
            'user_id' => $request->user()->id,
            'body' => $request->get('comment')
        ]);

        return back();
    }
}
