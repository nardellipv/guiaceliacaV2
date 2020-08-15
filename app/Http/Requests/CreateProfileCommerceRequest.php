<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProfileCommerceRequest extends FormRequest
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
            'name' => 'required',
            'address' => 'required | min:10',
            'phone' => 'nullable | numeric ',
            'about' => 'required | min:10',
            'web' => 'nullable|url',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'address.required' => 'La dirección es requerida',
            'phone.numeric' => 'El teléfono debe ser un numérico',
            'about.required' => 'Sobre nosotros es requerido',
            'about.min' => 'Sobre nosotros no debe ser tan corto',
            'web.url' => 'La dirección del sitio web debe ser valida',
            'facebook.url' => 'La dirección del sitio debe ser valida',
            'twitter.url' => 'La dirección del sitio debe ser valida',
            'instagram.url' => 'La dirección del sitio debe ser valida',
        ];
    }
}
