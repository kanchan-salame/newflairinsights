<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
{
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
    public function rules()
    {
        return [
            'title' => 'required',
            'show_on_homepage' => 'required',
            'image' => 'image|mimes:png,jpeg,gif,jpg',
            'name' => 'required',
            'title_tag' => 'required',
            'slug' => 'required',
            'meta_keywords' => 'required',
            'category_icon' => 'required',
        ];
    }
}
