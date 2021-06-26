@extends('components/layout')

@section('content')
    <h2> Welcome </h2>

    @foreach ($posts as $post)
        <article>
            <h2>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
                <div>By <a href="authors/{{$post->author->username}}"> {{$post->author->name}} </a> </div>
            </h2>
            <h3>
                <a href="/categories/{{ $post->category->slug }}">
                   Category: {{ $post->category->name }}
                </a>
            </h3>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
