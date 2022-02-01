<x-settings-layout title="Create post">
    <form action="/admin/posts" method="POST" enctype="multipart/form-data">
        @csrf

        <x-form.input name="title"></x-form.input>
        <x-form.input name="slug"></x-form.input>
        <x-form.input name="thumbnail" type="file"></x-form.input>
        <x-form.textarea name="excerpt"></x-form.textarea>
        <x-form.textarea name="body"></x-form.textarea>

        <x-form.formfield>
            <x-form.label name="Category"></x-form.label>
            <label for="category_id">Example select</label>
            <select class="form-select" id="categoryId" name="category_id">
                @foreach($categories as $category)
                    <option
                        value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : ''}}>{{ ucfirst($category->name) }}</option>
                @endforeach
            </select>
        </x-form.formfield>
        @error('category_id')
        <p class="text-danger fs-6">{{ $message }}</p>
        @enderror

        <x-form.formfield>
            <x-button label="Create"></x-button>
        </x-form.formfield>
    </form>
</x-settings-layout>
