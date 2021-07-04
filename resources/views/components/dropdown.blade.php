@props(['trigger'])

<div class="mx-3" x-data="{ show: false }" @click.away="show = false">
{{--    Trigger--}}
    <div @click="show = ! show">
        {{ $trigger }}
    </div>

{{--    Links--}}
    <div x-show="show" class="">
        {{ $slot }}
    </div>

</div>
