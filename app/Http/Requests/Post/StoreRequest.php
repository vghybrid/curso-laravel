<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreRequest extends FormRequest {
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
    protected function prepareForValidation() {
        $this->merge([
            // 'slug' => Str::slug($this->title)
            'slug' => str($this->title)->slug()
        ]);
    }
    public function rules() {
        return [
            "title" => "required|min:8|max:255",
            "slug" => "required|min:5|max:255|unique:posts",
            "category_id" => "required|integer",
            "posted" => "required",
            "content" => "required|min:7",
            "description" => "required|min:7"
        ];
    }
}
