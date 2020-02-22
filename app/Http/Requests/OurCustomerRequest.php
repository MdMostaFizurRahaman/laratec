<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OurCustomerRequest extends FormRequest
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
        switch($this->method()) {
            case 'GET':
            case 'DELETE':
                return [];
            case 'POST':
                return [
                    'name'     => 'required|max:75|unique:our_customers',
                    'logo'     => 'required'
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'name'     => 'required|max:75|unique:our_customers,name,' . $this->our_customer->id,
                    'logo'     => 'required'

                ];
            default:break;
        }
    }
}
