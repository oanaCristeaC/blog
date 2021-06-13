@extends('components/layout')

@section('content')
    <h2> Welcome </h2>

    @foreach ($posts as $post)
        <article>
            <h2>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h2>
            <h3>
                <a href="/categories/{{ $post->category->slug }}">
                    {{ $post->category->name }}
                </a>
            </h3>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
