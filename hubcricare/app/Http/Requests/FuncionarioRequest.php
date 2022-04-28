<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncionarioRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:50'],
            'email' => ['required', 'email', 'max:255'],
            'whatsapp' => ['required', 'min:12'],
            'dt_nasc' => ['required'],
            'image' => ['required'],
            'setor' => ['required', 'min:5'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "O campo :attribute precisa ser preenchido",
            'name.min' => "O campo :attribute deve ter no minimo 3 Caracteres",
            'name.max' => "O campo :attribute deve ter no maximo 50 Caracteres",
            'email.email' => "O campo de :attribute acima não contém um endereço de email válido",
            'email.max' => "O :attribute deve ter no máximo 255 caracteres",
            'whatsapp.required' => "O :attribute deve ser informado",
            'image.required' => "A :attribute deve ser em um formato valido"
        ];
    }
}
