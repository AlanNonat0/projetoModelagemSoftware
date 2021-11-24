<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class RecipeRequest extends FormRequest
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

        return  [
            "name" => "required|min:5|max:40",
            "description" => "required|min:4|max:255",
            "ingredients" => "required|max:2000",
            "preparation" => "required|max:5000",
            "category" => "required"
        ];

    }

    public function messages()
    {
        return [
            "required" => "O campo :attribute não pode ficar em branco",
            "category.require" => "Selecione uma :attribute valida",
            "max" => "O campo :attribute deve possuir no máximo :max caracteres",
            "min" => "O campo :attribute deve possuir no mínimo :min caracteres"
        ];
    }

    public function attributes()
    {
        return [
            "name" => "nome da receita",
            "description" => "descrição",
            "ingredients" => "ingredientes",
            "preparation" => "preparo",
            "category" => "categoria"
        ];
    }
}
