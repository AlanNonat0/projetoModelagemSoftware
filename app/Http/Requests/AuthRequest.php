<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;

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
            "email" => "required|email",
            "password" => "required|min:4"
        ];
    }

    public function messages()
    {
        return [
            "required" => "O campo :attibute não pode ficar em branco",
            "email.email" => "O compo :attribute não está valido",
            "password.min" => "O campo :attribute deve possuir no mínimo 4 caracteres"
        ];
    }

    public function attributes()
    {
        return [
            "email" =>"E-mail",
            "password" =>"Senha"
        ];
    }
}
