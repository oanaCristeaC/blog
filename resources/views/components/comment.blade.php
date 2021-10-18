@props(['comment'])

<div class="card py-3 my-3">
    <div class="row">
        <div class="col-2 d-flex justify-content-center">
            <img src="https://i.pravatar.cc?u={{$comment->author->id}}/" height="100px" width="100px">
        </div>
        <div class="col-10">
            <h5 style="margin-bottom: -6px">By {{ $comment->author->username }}</h5>
            <date class="mb-3" style="font-size: small">Posted {{ $comment->created_at }} ago</date>
            <p class="mt-1">{{ $comment->body}}</p>
        </div>
    </div>
</div>
