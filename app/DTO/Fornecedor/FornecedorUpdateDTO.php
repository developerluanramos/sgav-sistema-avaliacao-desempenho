<?php

namespace App\DTO\Fornecedor;

use App\DTO\BaseDTO;
use App\Http\Requests\App\Fornecedor\FornecedorUpdateRequest;
use Illuminate\Http\Request;

class FornecedorUpdateDTO extends BaseDTO
{
    public function __construct(
        public string $uuid,
        public string $razao_social,
        public string $nome_fantasia
    ){ }

    public static function makeFromRequest(FornecedorUpdateRequest $request)
    {
        return new self(
            $request->uuid,
            $request->razao_social,
            $request->nome_fantasia
        );
    }
}
