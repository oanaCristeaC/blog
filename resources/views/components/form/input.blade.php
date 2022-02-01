@props(['name', 'type' => 'text'])

<x-form.formfield>
    <x-form.label name="{{ $name }}"></x-form.label>

    <input type="{{ $type }}" class="form-control"
           name="{{ $name }}"
           id="{{ $name }}"
           placeholder="{{ ucwords($name) }}"
        {{ $attributes(['value' => old($name)]) }}
    >
    @error($name)
    <p class="text-danger fs-6">{{ $message }}</p>
    @enderror

</x-form.formfield>
