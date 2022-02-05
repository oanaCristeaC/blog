<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return[
            "title" => 'required|max:255',
            "slug" => 'required|max:255|unique:posts',
            "thumbnail" => 'required|image',
            "excerpt" => 'required|max:255',
            "body" => 'required',
            "category_id" => "required|exists:App\Models\Category,id",
        ];
    }
}
