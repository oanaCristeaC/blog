@props(['categories' , 'category'])

<x-dropdown>
    <x-slot name="trigger">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                {{ isset($category) ? ucwords($category->name) : 'Categories' }}
            </button>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                @foreach($categories as $categorySelection)
                    <li>
                        <a class="dropdown-item {{ isset($category) && $category->is($categorySelection) ? 'bg-info' : ''}}"
                           href="/categories/{{ $categorySelection->slug }}">{{ ucwords($categorySelection->name) }}</a>
                    </li>
                @endforeach
                <li><a class="dropdown-item" href="/">All</a></li>
            </ul>
        </div>
    </x-slot>

</x-dropdown>
