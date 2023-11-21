<?php

namespace App\Http\Requests\App\ConceitoAvaliacao;

use App\Repositories\ConceitoAvaliacao\ConceitoAvaliacaoRepositoryInterface;
use Illuminate\Foundation\Http\FormRequest;

class ConceitoAvaliacaoUpdateRequest extends FormRequest
{
    public function __construct(
        protected ConceitoAvaliacaoRepositoryInterface $repository
    )
    { }
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
            "uuid" => ["uuid", "exists:conceitos_avaliacao,uuid"],
            "descricao" => [
                "required", "min:5", "max:254"
            ],
            "itens_conceitos_avaliacao" => [
                "required",
                "array",
                "min:1",
            ],
            "itens_conceitos_avaliacao.*.nome" => [
                "required"
            ],
            "itens_conceitos_avaliacao.*.pontuacao" => [
                "required"
            ],
        ];
    }

}
