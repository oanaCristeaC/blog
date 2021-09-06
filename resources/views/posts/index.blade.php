<x-layout>
    @include('components._header')

    <main class="container">
        @if($posts->count())
            <x-posts-grid-card :posts="$posts" />

            {{ $posts->links() }}
        @else
            <p class="text-center"> No posts yet. Please check again later.</p>
        @endif
    </main>
</x-layout>

