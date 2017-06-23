<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'category' => 'required',
            'txtTitle' => 'required|unique:products,title',
            'fImages' => 'image|mimes:jpeg,jpg,png|max:1000',
            'source' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'category.required' => 'Please Choose Category',
            'txtTitle.required' => 'Please Enter Title',
            'txtTitle.unique' => 'This title Product Is Exist',
            'fImages.image' => 'This File Not Image ?',
            'fImages.mimes' => 'Image File Is Not Formats',
            'fImages.max' => 'This Image Too Large',
            'source.required' => 'Please Enter Source'
        ];
    }
}
