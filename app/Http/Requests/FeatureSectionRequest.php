<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeatureSectionRequest extends FormRequest
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
            'title' => 'required|string|max:20',
            'sub_title' => 'required|string|max:45',
            'price' => 'required|numeric|min:1',
            'shop_now_link' => 'nullable|url',
            'details_link' => 'nullable|url',
            'image' => 'required'
        ];
    }

    /**
     * Get the validation error messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            '*.regex' => 'This is not a valid link',
        ];
    }
}
