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
            'name' => ['required', 'string', 'min:3', 'max:50'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'max:13'],
            'dt_nasc' => ['required'],
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
            'phone.required' => "O :attribute deve ser informado",
            'phone.max' => "O campo :attribute deve ter no maximo 13 Caracteres",
        ];
    }
}
