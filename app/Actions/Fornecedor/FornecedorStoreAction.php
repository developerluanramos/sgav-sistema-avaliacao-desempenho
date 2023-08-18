<?php

namespace App\Actions\Fornecedor;

use App\DTO\Fornecedor\FornecedorCreateDTO;
use App\Models\Fornecedor;
use App\Repositories\Fornecedor\FornecedorRepositoryInterface;

class FornecedorStoreAction
{
    public function __construct(
        protected FornecedorRepositoryInterface $repository
    ) { }

    public function exec(FornecedorCreateDTO $dto): Fornecedor
    {
        return $this->repository->new($dto);
    }
}
