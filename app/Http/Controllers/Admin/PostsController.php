<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;

class PostsController extends Controller
{
    public function index (Post $post)
    {
//        ddd(Gate::allows('admin'));
//        $this->authorize('admin');
//        dd(request()->user()->can('admin'));

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

    public function store(StorePostRequest $request)
    {
        // A storage link was created: php artisan storage:link
        $attributes = $request->validated();

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


    public function update(UpdatePostRequest $request, Post $post): RedirectResponse
    {

        $attributes = $request->validated();

        if(isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);

        return back()->with('success', 'Your blog post has been updated!');
    }

    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();

        return back()->with('success', 'Post successfully deleted.');
    }

}
