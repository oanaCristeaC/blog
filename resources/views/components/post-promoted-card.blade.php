@props(['post'])

<aricle>
    <div class="my-3 my-md-5">
    <div class="row">
        <div class="col-12 col-md-6">
            {{-- TODO --}}
            <img src="/images/illustration-1.png" style="max-width: 100%" alt="Blog Post illustration"
                 class="rounded">
        </div>
        <div class=" col-12 col-md-6" style="display: flex; flex-direction: column">
            <div>
                <div class="space-x-2">
                    <button class="btn btn-sm btn-outline-info"
                            href="/categories/{{ $post->category->slug }}">{{$post->category->name}}</button>
                </div>

                <div class="mt-2">
                    <h3 class="text-3xl">
                        {{ $post->title }}
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
               <a class="btn btn-sm btn-secondary" role="button" href="/posts/{{ $post->slug }}">
                   Read more
               </a>
           </div>

        </div>
    </div>
    </div>
</aricle>
