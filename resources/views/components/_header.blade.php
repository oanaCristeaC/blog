<header>
    <div class="wrapper text-center py-3 py-md-5">
        <h1>How to learn programming</h1>
        <p>By Ionela Cristea</p>

        <div>
            <x-category-dropdown :categories="$categories" :category="isset($category) ? $category : null"/>
        </div>
    </div>
</header>
