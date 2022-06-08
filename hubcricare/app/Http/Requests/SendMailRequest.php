<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendMailRequest extends FormRequest
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
        $this->redirect = url()->previous() . '#contact';
        return [
            'name' => 'required',
            'email' => 'required','email',
            'telefone' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => ['required', 'captcha'],
        ];

    }

    public function messages()
    {
        return [
            'g-recaptcha-response.required' => 'Por favor faça a verificação acima.',
            'g-recaptcha-response.captcha' => 'Erro na verificação! Tente novamente mais tarde.',
        ];
    }
}
