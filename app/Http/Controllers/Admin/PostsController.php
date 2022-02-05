<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostsController extends Controller
{
    public function index (Post $post)
    {
        return view('admin.posts.index', [
            'posts' => $post->paginate(50),
        ]);

    }

    public function create()
    {

        return view('admin.posts.create', [
            'categories' => Category::all()
        ]);
    }

    //todo move this in a Requests page
    public function store(Request $request)
    {
        $post = new Post();

        // A storage link was created: php artisan storage:link
        $attributes = $this->validatePost($request, $post);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = $request->file('thumbnail')->store('thumbnails');

        Post::create($attributes);

        return redirect(RouteServiceProvider::HOME)->with('success', 'Your blog post has been posted!');

    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }


    public function update(Request $request, Post $post)
    {
        $attributes = $this->validatePost($request, $post);

        if(($attributes['thumbnail'] ?? false) {
            $attributes['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);

        return back()->with('success', 'Your blog post has been updated!');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('success', 'Post successfully deleted.');
    }

    /**
     * @param Request $request
     * @param Post $post
     * @return array
     */
    private function validatePost(Request $request, Post $post): array
    {
        $attributes = $request->validate([
            "title" => 'required|max:255',
            "slug" => ['required', 'max:255', Rule::unique('posts', 'slug')->ignore($post)],
            "thumbnail" => $post->exists ? 'image' : 'required|image',
            "excerpt" => 'required|max:255',
            "body" => 'required',
            "category_id" => "required|exists:App\Models\Category,id",
        ]);
        return $attributes;
    }

}
