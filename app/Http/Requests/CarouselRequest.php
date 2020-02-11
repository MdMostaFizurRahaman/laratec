<?php

namespace App\Http\Requests;

use App\Models\Carousel;
use Illuminate\Foundation\Http\FormRequest;

class CarouselRequest extends FormRequest
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
                return $carousel = $this->id ? Carousel::find($this->id)->exists() : true;
                // return $carousel = Carousel::find($this->route('id'))->exists();

                // return $carousel && $this->user()->can('update', $id);
            default:break;
        }
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
                    'title' => 'required|unique:carousels,id,' . $this->route('id') ?: NULL,
                    'subtitle' => 'required',
                    'link' => 'required',
                    'slider' => 'image|mimes:jpeg,jpg,png,gif|max:2048',
                ];
            default:break;
        }
    }
}
