@props(['comment'])

<x-comment-card authorId="{{ $comment->author->id }}">
    <h5 style="margin-bottom: -6px">By {{ $comment->author->username }}</h5>
    <date class="mb-3" style="font-size: small">Posted {{ $comment->created_at->format("F j, Y, g:i a") }} </date>
    <p class="mt-1">{{ $comment->body}}</p>
</x-comment-card>
