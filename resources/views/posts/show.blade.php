<x-layout>
    <article>
        <div class="container">
            <div class="wrapper text-center py-3 py-md-5">
                <h1>{{ $post->title }}</h1>
                <div class="py-3">By <a href="/authors/{{$post->author->username}}"> {{$post->author->name}} </a></div>

                <p> {{ $post->body }} </p>
                <a href="/">Go back</a>
            </div>
        </div>
    </article>
</x-layout>
