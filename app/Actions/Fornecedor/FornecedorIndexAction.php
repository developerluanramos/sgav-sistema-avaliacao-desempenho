<?php

namespace App\Actions\Fornecedor;

use App\Repositories\Fornecedor\FornecedorRepositoryInterface;

class FornecedorIndexAction
{
    public function __construct(
        protected FornecedorRepositoryInterface $repository
    ) { }

    public function exec(array $filters): array
    {
        return $this->repository->getAll($filters);
    }
}
