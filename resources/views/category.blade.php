@extends('components/layout')

@section('content')
    <h2>{{ strtoupper($category->name) }}</h2>
    <article>
        @foreach ($category->posts as $post)
            <article>
                <h2>
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h2>
                <p>{{ $post->excerpt }}</p>
            </article>
        @endforeach
        <a href="/">Go back</a>
    </article>
@endsection
