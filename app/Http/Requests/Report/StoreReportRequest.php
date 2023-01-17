<?php

namespace App\Http\Requests\Report;

use Illuminate\Foundation\Http\FormRequest;

class StoreReportRequest extends FormRequest
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
            'pages' => 'numeric|min:2|max:500',
            'category_id' => 'required',
            'show_on_homepage' => 'required',
            'image_one' => 'image|mimes:png,jpeg,gif,jpg',
            'image_two' => 'image|mimes:png,jpeg,gif,jpg',
            'image_three' => 'image|mimes:png,jpeg,gif,jpg',
            'publisher_id' => 'required',
            'delivery_format_id' => 'required',
            'title' => 'required',
            'pages' => 'required',
            'description_one' => 'required',
            'description_two' => 'required',
            'description_three' => 'required',
            'content' => 'required',
            'list_of_figures' => 'required',
            'single_user_price' => 'required',
            'multi_user_price' => 'required',
            'corp_user_price' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ];
    }
}
