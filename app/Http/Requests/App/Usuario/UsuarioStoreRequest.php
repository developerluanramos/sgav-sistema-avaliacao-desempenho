<?php

namespace App\Http\Requests\Usuario;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "nome" => [
                "required", "min:5", "max:254"
            ],
            "email" => [
                "required", "min:5", "max:254", "email"
            ],
            'situacao' =>  [
                "required", "boolean"
            ],
        ];
    }
}
