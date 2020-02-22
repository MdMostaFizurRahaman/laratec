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
        switch($this->method()) {
            case 'GET':
            case 'DELETE':
                return [];
            case 'POST':
                return [
                    'name'     => 'required|max:75|unique:products',
                    'code'     => 'required|max:75|unique:products',
                    'price'    => 'required|numeric|min:1',
                    'category_id' => 'required',
                    'description' => 'nullable|max:500',
                    'features' => 'nullable|max:500',
                    'configuration' => 'nullable|max:500',
                    'specification' => 'nullable|max:500',
                    'image'     => 'required',
                    'home'     => 'required',
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'name'     => 'required|max:75|unique:products,name,' . $this->product->id,
                    'code'     => 'required|max:75|unique:products,code,' . $this->product->id,
                    'price'    => 'required|numeric|min:1',
                    'category_id' => 'required',
                    'description' => 'nullable|max:500',
                    'features' => 'nullable|max:500',
                    'configuration' => 'nullable|max:500',
                    'specification' => 'nullable|max:500',
                    'image'     => 'required',
                    'home'     => 'required',
                ];
            default:break;
        }
    }
}
