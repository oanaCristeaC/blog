@extends('components/layout')

@section('content')
    <article>
        <h2> {{ $post->title }} </h2>
        <div> <a href="#"> {{$post->user->name}} </a> </div>
            <p> {{ $post->body }} </p>
        <a href="/">Go back</a>
    </article>
@endsection
