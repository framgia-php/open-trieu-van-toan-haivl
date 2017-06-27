<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
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
            'txtTitle' => 'required|unique:videos,title',
            'source' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'txtTitle.required' => 'Plear Enter Name Title',
            'txtTitle.unique' => 'This Name Video Is Exists',
            'source.required' => 'Please Enter Source '
        ];
    }
}
