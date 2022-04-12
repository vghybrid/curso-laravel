<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;


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
            'slug' => str($this->title)->slug()
        ]);
    }
    public function rules() {
        return [
            "title" => "required|min:8|max:255",
            "slug" => "required|min:5|max:255|unique:categories"
        ];
    }
}
