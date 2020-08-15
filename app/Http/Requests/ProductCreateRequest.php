<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:100',
            'category_id' => 'required',
            'description' => 'required|max:250',
            'price' => 'required|max:10',
            'offer' => 'max:10',
            'available' => 'required',
            'photo' => 'mimes:jpeg,jpg,png,gif|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.max' => 'El nombre no debe ser tan largo',
            'category_id.required' => 'La categoria es requerida',
            'description.required' => 'La descripción es requerida',
            'description.max' => 'La descripción no debe tener más de 250 caracteres',
            'price.required' => 'El precio es requerido',
            'price.max' => 'El precio no debe tener más de 10 caracteres',
            'offer.max' => 'La oferta no debe tener más de 10 caracteres',
            'available.required' => 'La disponibilidad del producto es requerida',
            'photo.max' => 'La foto no debe superar los 2MB',
            'photo.mimes' => 'La foto debe ser una imágen',
        ];
    }
}