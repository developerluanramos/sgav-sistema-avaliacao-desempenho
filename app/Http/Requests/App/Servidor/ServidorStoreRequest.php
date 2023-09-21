<?php

namespace App\Http\Requests\App\Servidor;

use Illuminate\Foundation\Http\FormRequest;

class ServidorStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:servidores',
            'data_nascimento' => 'required|date',
            'data_admissao' => 'required|date',
            'cargo_uuid' => 'required|exists:cargos,uuid',
            'matricula' => 'required|unique:servidores',
        ];
    }
}
