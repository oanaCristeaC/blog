@props(['posts'])

<x-post-promoted-card :post="$posts[0]"/>

@if($posts->count() > 1)

    <div class="row">
        @foreach ($posts->skip(1) as $post)
            <x-post-card
                :post="$post"
            />
        @endforeach
    </div>

@endif
