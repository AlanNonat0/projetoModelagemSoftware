<?php

namespace App\Http\Requests;

use App\Repositories\ConnectionHelppers;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        $id = null;


        $rules = [
            "registerName" => "required|regex:/^[a-zA-Z]/|min:3",
            "registerTelephone" => "max:14|min:8|required|regex:/^[\d]+$/",
            "registerPassword" => "required|min:4"
        ];

        if(ConnectionHelppers::testConnection()){
            $id = $this->id? ", {$this->id}" : null;
            $rules["registerEmail"] = "required|email|unique:users,email{$id}";
        }

        return $rules;
    }

    public function messages()
    {
        return [
            "required" => "O campo :attibute não pode ficar em branco",
            "registerTelephone.max" => "O campo :attribute deve possuir no máximo 14 caracteres",
            "registerTelephone.min" => "O campo :attribute deve possuir no mínimo 8 caracteres",
            "registerTelephone.regex" => "O campo :attribute deve conter apenas números",
            "registerName.regex" => "Não utilize números e caracteres especiais no campo :attribute",
            "registerName.min" => "O campo :attribute deve possuir no mínimo 3 caracteres",
            "registerEmail.email" => "O compo :attribute não está valido",
            "registerEmail.unique" => ":attribute já registrado",
            "registerPassword.min" => "O campo :attribute deve possuir no mínimo 4 caracteres"
        ];
    }

    public function attributes()
    {
        return [
            "registerName" => "Nome de usuário",
            "registerEmail" =>"E-mail",
            "registerTelephone" =>"Telefone",
            "registerPassword" =>"Senha"
        ];
    }
}
