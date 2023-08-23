<?php

namespace App\DTO\Fornecedor;

use App\DTO\BaseDTO;
use App\Http\Requests\App\Fornecedor\FornecedorStoreRequest;
use Illuminate\Http\Request;

class FornecedorStoreDTO extends BaseDTO
{
    public function __construct(
        public string $razao_social,
        public string $nome_fantasia
    ){ }

    public static function makeFromRequest(FornecedorStoreRequest $request)
    {
        return new self(
            $request->razao_social,
            $request->nome_fantasia
        );
    }
}
