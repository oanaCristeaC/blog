<x-layout>
    <article>
        <div class="container col-lg-8">
            <div class="wrapper text-center py-3 py-md-5">
                <h1>{{ $post->title }}</h1>
                <div class="py-3">By <a href="/?author={{$post->author->username}}"> {{$post->author->name}} </a></div>

                <p> {{ $post->body }} </p>
                <a href="/">Go back</a>
            </div>
            <div class="my-3">
                <h4>Reviews</h4>
            </div>
            <x-comment-form :post="$post"></x-comment-form>

            @foreach($post->comments as $commentObj)
                <x-comment :comment="$commentObj"></x-comment>
            @endforeach
        </div>
    </article>
</x-layout>
