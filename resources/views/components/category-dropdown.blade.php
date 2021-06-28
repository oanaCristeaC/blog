<x-dropdown>
    <x-slot name="trigger">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                {{ 'Categories' }}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </x-slot>

{{-- <div>--}}
{{--     <x-slot name="trigger">--}}
{{--         <button class="">--}}
{{--             {{ 'Categories' }}--}}
{{--             <x-icon name="down-arrow" ></x-icon>--}}
{{--         </button>--}}
{{--     </x-slot>--}}

{{--     <x-dropdown-item href="/">--}}

{{--     </x-dropdown-item>--}}
{{-- </div>--}}

{{--    @foreach($categories as $category)--}}
{{--        <x-drop-down-item href="/?category={{ $category->slug }}">--}}
{{--            {{ $category->name }}--}}
{{--        </x-drop-down-item>--}}
{{--    @endforeach--}}

</x-dropdown>
