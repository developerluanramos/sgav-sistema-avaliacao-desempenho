<?php

namespace App\Http\Requests\App\Servidor;

use Illuminate\Foundation\Http\FormRequest;

class ServidorUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => 'required|exists:servidores,id',
            'nome' => 'required|min:5|max:254',
            'email' => 'required|email|min:5|max:254',
            'data_nascimento' => 'required|date',
            'data_admissao' => 'required|date',
            'cargo_uuid' => 'required|exists:cargos,uuid',
            'matricula' => 'required|min:5|max:50',
        ];
    }
}
