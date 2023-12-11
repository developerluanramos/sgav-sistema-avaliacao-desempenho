<?php

namespace App\Http\Requests\App\CicloAvaliativoPeriodicidade;

use Illuminate\Foundation\Http\FormRequest;

class PeriodicidadeStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
//            'iniciado_em' => ['required', 'date'],
//            'quantidade_ciclo' => ['required', 'number'],
//            'unidade_ciclo' => ['required'],
//            'quantidade_periodo' => ['required', 'number'],
//            'unidade_periodo' => ['required'],
//            'tolerancia_inicio_ciclo' => ['required', 'number'],
//            'tolerancia_final_ciclo' => ['required', 'number'],
//            'tolerancia_inicio_periodo' => ['required', 'number'],
//            'tolerancia_final_periodo' => ['required', 'number']
        ];
    }
}
