@extends('components/layout')

@section('content')
    <article>
        <h2> {{ $post->title }} </h2>
        <div>By <a href="authors/{{$post->author->username}}"> {{$post->author->name}} </a> </div>
            <p> {{ $post->body }} </p>
        <a href="/">Go back</a>
    </article>
@endsection
