<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'name' => 'required|max:255|unique:cars',
            'year' => 'required',
            'price' => 'required|max:10',
            'user_id' => 'required|max:6',
            'image'    => 'nullable|image|max:1999', //formats: jpeg, png, bmp, gif, svg
            'image_2x'    => 'nullable|image|max:1999', //formats: jpeg, png, bmp, gif, svg
            'image_3x'    => 'nullable|image|max:1999', //formats: jpeg, png, bmp, gif, svg
        ];
    }
}
