<?php

namespace App\Http\Requests;

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
            'home-search-input' => 'string|nullable|regex:/^[a-zA-Z0-9]/'
        ];
    }

    public function messages()
    {
        return [
            'home-search-input.regex' => 'Não utilize caracteres especiais em sua busca'
        ];
    }
}
