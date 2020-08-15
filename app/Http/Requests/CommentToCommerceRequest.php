<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentToCommerceRequest extends FormRequest
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
            'email' => 'required',
            'text-message' => 'required | min:5',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'email.required' => 'El email es requerido',
            'text-message.required' => 'El mensaje es requerido',
            'text-message.min' => 'El mensaje debe ser más largo',
        ];
    }
}
