<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
                    'title'     => 'required|max:75|unique:posts',
                    'subtitle'  => 'required|max:191',
                    'description' => 'required|max:500',
                    'image' => 'required'
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'title'     => 'required|max:75|unique:posts,title,' . $this->post->id,
                    'subtitle'  => 'required|max:191',
                    'description' => 'required|max:500',
                    'image' => 'required'
                ];
            default:break;
        }
    }
}
