<header>
    <div class="wrapper text-center py-3 py-md-5">
        <h1>Learn to program</h1>
       <div class="d-flex justify-content-center">
           <x-category-dropdown :categories="$categories" :category="isset($category) ? $category : null"/>
           <x-search />
       </div>
    </div>
</header>
