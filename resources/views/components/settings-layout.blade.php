@props(['title'])

<x-layout>
    <div class="row">
        <div class="col-12 col-md-9 m-auto py-5">
            <h3 class="mb-5 text-center"> {{ $title }}</h3>

            {{ $slot }}

        </div>
    </div>
</x-layout>
