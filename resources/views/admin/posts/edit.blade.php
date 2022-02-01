<x-settings-layout title="Edit post: {{ $post->title }}">
    <form action="/admin/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('PATCH')

        <x-form.input name="title" value="{{ $post->title }}"></x-form.input>
        <x-form.input name="slug" value="{{ $post->slug }}"></x-form.input>
        <x-form.textarea name="excerpt">{{old('excerpt') ?? $post->excerpt }}</x-form.textarea>
        <x-form.textarea name="body">{{old('body') ?? $post->body }}</x-form.textarea>


        <div class="card p-3 my-3">
            <div class="row">
                <div class="col-10">
                    <x-form.input name="thumbnail" type="file" value="{{ old('thumbnail') ?? $post->thumbnail }}"></x-form.input>
                </div>
                <div class="col-2 d-flex justify-content-center">
                    <img class="rounded" src="{{ asset('storage/' . $post->thumbnail) }}" height="100px" width="100px">
                </div>
            </div>
        </div>

        <x-form.formfield>
            <x-form.label name="Category"></x-form.label>
            <label for="category_id">Example select</label>
            <select class="form-select" id="categoryId" name="category_id">
                @foreach($categories as $category)
                    <option
                        value="{{ $category->id }}"
                        {{ old('category_id', $post->category_id ) == $category->id ? 'selected' : ''}}>
                        {{ ucfirst($category->name) }}
                    </option>
                @endforeach
            </select>
        </x-form.formfield>
        @error('category_id')
        <p class="text-danger fs-6">{{ $message }}</p>
        @enderror

        <x-form.formfield>
            <x-button label="Update"></x-button>
        </x-form.formfield>
    </form>
</x-settings-layout>
