<x-layout>
    <div class="row">
        <div class="col-12 col-md-9 m-auto py-5">
            <form action="/admin/posts" method="POST">
                @csrf

                <h3> Create a post </h3>

                {{--        Title--}}
                <div class="form-group mb-3">
                    <label class="form-label" for="postTitle"><b>Title</b></label>
                    <textarea type="text" class="form-control" placeholder="Post title" name="title"
                              id="postTitle" rows="1" cols="33"></textarea>
                    @error('title')
                    <p class="text-danger fs-6">{{ $message }}</p>
                    @enderror
                </div>

                {{--        Slug --}}
                <div class="form-group mb-3">
                    <label class="form-label" for="postSlug"><b>Slug</b></label>
                    <input type="text" class="form-control" placeholder="Post slug" name="slug"
                              id="postSlug" rows="1" cols="33" />
                    @error('slug')
                    <p class="text-danger fs-6">{{ $message }}</p>
                    @enderror
                </div>

                {{--        Excerpt --}}
                <div class="form-group mb-3">
                    <label class="form-label" for="postExcerpt"><b>Excerpt</b></label>
                    <textarea type="text" class="form-control" placeholder="Excerpt" name="excerpt"
                              id="postExcerpt"></textarea>
                    @error('excerpt')
                    <p class="text-danger fs-6">{{ $message }}</p>
                    @enderror
                </div>

                {{--        Body--}}
                <div class="form-group mb-3">
                    <label class="form-label" for="postBody"><b>Post details</b></label>
                    <textarea type="text" class="form-control" placeholder="Post body" name="body"
                              id="postBody" rows="5" cols="33"></textarea>
                    @error('body')
                    <p class="text-danger fs-6">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="category_id">Example select</label>
                    <select class="form-select" id="categoryId" name="category_id">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{ucfirst($category->name)}}</option>
                        @endforeach
                    </select>
                </div>
                @error('category_id')
                <p class="text-danger fs-6">{{ $message }}</p>
                @enderror
                <button type="submit" class="btn btn-primary my-5">Submit</button>
            </form>
        </div>
    </div>

</x-layout>
