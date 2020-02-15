<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
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
            'company_name' => 'required|string|max:45',
            'telephone' => 'required|string|max:20',
            'mobile' => 'required|string|max:20',
            'hotline' => 'required|string|max:20',
            'description' => 'nullable|string|max:200',
            'address' => 'nullable|string|max:200',
            'footer_text' => 'nullable|string|max:191',
            'meta_tags' => 'nullable|string|max:191',
            'logo' => 'required|image|mimes:jpg,jpeg,png,svg,gif',
        ];
    }
}
