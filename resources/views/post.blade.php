@extends('components/layout')

@section('content')
    <article>
        <h2> {{ $post->title }} </h2>
        <div>
            <p> {{ $post->body }} </p>
        </div>
        <a href="/">Go back</a>
    </article>
@endsection
