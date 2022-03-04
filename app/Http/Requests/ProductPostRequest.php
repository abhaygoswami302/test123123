<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductPostRequest extends FormRequest
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
            'user_id' => 'numeric',
            'collection_id' => 'numeric',
            'category_id' => 'numeric',
            'subseries_id' => 'numeric',
            'name' => 'required|max:255',
            'series' => 'required|max:255',
            'category_name' => 'required|max:255',
            'collection_name' => 'required|max:255',
            'subseries_name' => 'required|max:255',
            'theme' => 'max:255|nullable',
            'theme_id' => 'numeric|nullable',
            'model_name' => 'max:255|nullable',
            'casting_name' => 'nullable|max:255',  
            'year' => 'required|numeric',
            'colour' => 'max:255',
            'tampo' => 'max:255|nullable',
            'decoration' => 'max:255|nullable',
            'base_colour' => 'max:255|nullable',
            'type' => 'max:255|nullable',
            'window_colour' => 'max:255|nullable',
            'interior_colour' => 'max:255|nullable',
            'wheel_type' => 'max:255|nullable',
            'visibility' => 'numeric|required|max:20',
            'country' => 'max:255|nullable',
            'notes' => 'nullable',
            'image1' => 'mimes:jpeg,jpg,png|max:10000' ,
            'toy_hash' => 'required|unique:products,toy_hash|unique:temporaries,toy_hash'
        ];
    }
}
