<?php

namespace App\Repositories\Fornecedor;

use App\DTO\Fornecedor\FornecedorCreateDTO;
use App\Models\Fornecedor;
use App\Repositories\Interfaces\PaginationInterface;

interface FornecedorRepositoryInterface
{
    public function all(array $filters): array;
    public function paginate(int $page = 1, int $totalPerPage = 10, string $filter = null) : PaginationInterface;
    public function find(): \stdClass;
    public function new(FornecedorCreateDTO $fornecedorCreateDTO): Fornecedor;
}
