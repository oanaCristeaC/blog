@props(['post'])

<div class="my-3 my-md-3">
    <div class="row">
        <div class="col-12 col-md-6">
            <a href="/posts/{{ $post->slug }}">
                <img src="{{$post->thumbnail ? asset('storage/' . $post->thumbnail) :  '/images/illustration-1.png'}}" style="max-width: 100%" alt="Blog Post illustration"
                     class="rounded">
            </a>
        </div>
        <div class=" col-12 col-md-6" style="display: flex; flex-direction: column">
            <div>
                <div class="space-x-2">
                    <a class="btn btn-sm btn-outline-info" type="button"
                       href="/?category={{ $post->category->slug }}">{{$post->category->name}}</a>
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
            </div>
            <div style="flex:1">
                <p>
                    {{ $post->excerpt }}
                </p>
            </div>

            <div class="d-flex justify-content-end">
                <a class="btn btn-sm btn-light" role="button" href="/posts/{{ $post->slug }}">
                    Read more
                </a>
            </div>

        </div>
    </div>

</div>

