<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class PutRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules() {
        return [
            "title" => "required|min:8|max:255",
            "slug" => "required|min:5|max:255|unique:posts,slug,".$this->route("post")->id,
            "category_id" => "required|integer",
            "posted" => "required",
            "content" => "required|min:7",
            "description" => "required|min:7",
            "image" => "mimes:jpeg,jpg,png|max:10240"
        ];
    }
}
