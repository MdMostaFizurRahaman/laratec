<?php

namespace App\Http\Requests;

use App\Models\Settings;
use Illuminate\Foundation\Http\FormRequest;

class CompanySettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        switch($this->method()) {
            case 'GET':
            case 'DELETE':
            case 'POST':
            case 'PUT':
            case 'PATCH':
                return $settings = $this->id ? Settings::find($this->id)->exists() : true;
                // return $settings = Settings::find($this->route('id'))->exists();

                // return $settings && $this->user()->can('update', $id);
            default:break;
        }
        // return true;

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch($this->method()) {
            case 'GET':
            case 'DELETE':
                return [];
            case 'POST':
            case 'PUT':
            case 'PATCH':
                return [
                    'company_name' => 'required|unique:settings,id,' . $this->route('id') ?: NULL,
                    'email' => 'required|email',
                    'telephone' => 'required',
                    'mobile' => 'required',
                    'hotline' => 'required',
                    'address' => 'required|max:100',
                    'logo' => 'image|mimes:jpeg,jpg,png,gif|max:2048',
                ];
            default:break;
        }

    }
}
