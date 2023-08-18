<?php

namespace App\Repositories\Fornecedor;

use App\DTO\Fornecedor\FornecedorCreateDTO;
use App\Models\Fornecedor;

interface FornecedorRepositoryInterface
{
    public function getAll(array $filters): array;
    public function findOne(): \stdClass;

    public function new(FornecedorCreateDTO $fornecedorCreateDTO): Fornecedor;
}
