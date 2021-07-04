<header>
    <div class="wrapper text-center py-3 py-md-5">
        <h1>Learn to program</h1>
        <x-category-dropdown :categories="$categories" :category="isset($category) ? $category : null"/>
    </div>
</header>
