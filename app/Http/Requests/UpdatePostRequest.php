<?php

namespace App\Http\Requests;

use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $post = $this->route('post');

        return [
            "title" => 'required|max:255',
            "slug" => ['required', 'max:255', Rule::unique('posts', 'slug')->ignore($post)],
            "thumbnail" => 'image',
            "excerpt" => 'required|max:255',
            "body" => 'required',
            "category_id" => "required|exists:App\Models\Category,id",
        ];
    }
}
