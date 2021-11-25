<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class PersonalDataRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::user()){
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            "telephone" => "max:14|min:8|regex:/^[\d]+$/",
            "password" => "required|min:4",
            "npassword" => "required|confirmed|min:4"
        ];


        if(empty($this->get('telephone'))){
            unset($rules['telephone']);
        }

        return $rules;

    }

    public function messages()
    {
        return [
            "required" => "O campo :attibute não pode ficar em branco",
            "min" => "O campo :attribute deve possuir no mínimo :min caracteres",
            "telephone.max" => "O campo :attribute deve possuir no máximo 14 caracteres",
            "telephone.min" => "O campo :attribute deve possuir no mínimo 8 caracteres",
            "telephone.regex" => "O campo :attribute deve conter apenas números",
            "npassword.confirmed" => "Os campos da :attribute são diferentes"
        ];
    }

    public function attributes()
    {
        return [
            "telephone" =>"telefone",
            "password" =>"senha",
            "npassword" =>"nova senha",
        ];
    }
}
