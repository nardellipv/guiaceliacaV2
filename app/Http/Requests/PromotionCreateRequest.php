<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromotionCreateRequest extends FormRequest
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
            'name' => 'required|min:5|max:20',
            'text' => 'required|min:5|max:30',
            'porcentage' => 'max:2',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.min' => 'El nombre debe tener más de 5 caracteres',
            'name.max' => 'El nombre debe tener menos de 20 caracteres',
            'text.required' => 'El texto es requerido',
            'text.min' => 'El texto debe tener más de 5 caracteres',
            'text.max' => 'El texto debe tener meos de 30 caracteres',
            'porcentage.max' => 'El porcentaje debe tener como maximo 2 caracteres',
        ];
    }
}
