<?php

namespace App\Http\Requests\App\Servidor;

use Illuminate\Foundation\Http\FormRequest;

class ServidorEditRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'uuid' => 'required|exists:servidores,uuid',
        ];
    }
}
