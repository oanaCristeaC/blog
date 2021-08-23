@props(['categories' , 'category'])

<x-dropdown>
    <x-slot name="trigger">
        <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                {{ isset($category) ? ucwords($category->name) : 'Categories' }}
            </button>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="max-height:200px; overflow: auto ">
                <li><a class="dropdown-item {{ !isset($category) ? 'bg-info' : '' }}" href="/">All</a></li>
                @foreach($categories as $categorySelection)
                    <li>
                        <a class="dropdown-item {{ isset($category) && $category->is($categorySelection) ? 'bg-info' : ''}}"
                           href="/?category={{ $categorySelection->slug }}">{{ ucwords($categorySelection->name) }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-slot>

</x-dropdown>
