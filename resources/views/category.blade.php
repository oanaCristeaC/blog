<x-layout>

    <main class="container">
        <h2>{{ strtoupper($category->name) }}</h2>

        @if($category->posts->count())
            <x-posts-grid-card :posts="$category->posts" />
            <a href="/">Go back</a>
        @else
            <p class="text-center"> No posts yet. Please check again later.</p>
        @endif
    </main>

</x-layout>
