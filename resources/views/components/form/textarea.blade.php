@props(['name'])

<x-form.formfield>
    <x-form.label name="{{ $name }}"></x-form.label>
    <textarea type="text" class="form-control"
              name="{{ $name }}"
              id="{{ $name }}">
        {{ old('excerpt') }}
    </textarea>
    @error($name)
    <p class="text-danger fs-6">{{ $message }}</p>
    @enderror
</x-form.formfield>
