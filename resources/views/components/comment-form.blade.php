@props(['post'])

<x-comment-card authorId="{{ auth()->id() }}">
    <form method="POST" action="/posts/{{ $post->slug }}/comments">
        @csrf

        <div class="row">
            <div class="col-12 pl-3">
                <textarea name="comment-body" class="w-100 p-2" placeholder="What's your opinion about this post?"></textarea>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <x-button class="mt-3" label="Submit"></x-button>
        </div>
    </form>
</x-comment-card>
