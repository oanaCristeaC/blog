@props(['post'])

{{--Todo: size in the parent element--}}

<div class="col-12 col-md-4 my-3">
    <div class="row">
        <div class="col-12">
            <a href="/posts/{{ $post->slug }}">
                <img src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) :  '/images/illustration-1.png'}}" style="max-width:100%;" alt="Blog Post illustration"
                     class="rounded">
            </a>
        </div>
        <div class=" col-12 py-3" style="display: flex; flex-direction: column; min-height: 450px">
            <header>
                <div class="space-x-2">
                    <a class="btn btn-sm btn-outline-info px-3"
                       href="/category={{ $post->category->slug }}">{{$post->category->name}}</a>
                </div>

                <div class="mt-2">
                    <h3 class="text-3xl">
                        <a href="/posts/{{ $post->slug }}" style="text-decoration: none" class="text-dark">
                            {{ $post->title }}
                        </a>
                    </h3>
                </div>

                <p class="mt-2 fs-6 fw-lighter text-secondary">
                    Published
                    <time>{{ $post->created_at->diffForHumans() }}</time>
                </p>
            </header>
            <div style="flex:1">
                <p>
                    {{ $post->excerpt }}
                </p>
            </div>

            <footer>
                <nav class="navbar navbar-light">
                    <div class="container-fluid px-0">
                        <a class="navbar-brand" href="/?author={{ $post->author->username }}">
                            <img src="/images/lary-avatar.svg" alt="Lary avatar">
                            {{ $post->author->name }}
                        </a>
                        <a class="btn btn-sm btn-light" role="button" href="/posts/{{ $post->slug }}">
                            Read more
                        </a>
                    </div>
                </nav>
            </footer>

        </div>
    </div>
</div>
