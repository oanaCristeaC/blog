@props(['title'])

<x-layout>
    <div class="row">
        <div class="col-12 col-md-9 m-auto py-5">
            <h3 class="mb-5 text-center"> {{ $title }}</h3>

            <div class="row">
                <div class="col-12 col-md-3 list-group">

                    <a class="list-group-item list-group-item-action {{ request()->is('admin/posts') ? 'bg-info' : '' }}"
                       href="/admin/posts">Posts</a>
                    <a class="list-group-item list-group-item-action {{ request()->is('admin/posts/create') ? 'bg-info' : '' }}"
                       href="/admin/posts/create">Create posts</a>
                </div>
                <div class="col-12 col-md-9">
                    {{ $slot }}
                </div>

            </div>

        </div>
    </div>
</x-layout>
