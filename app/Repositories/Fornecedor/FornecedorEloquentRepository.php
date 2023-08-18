<?php

namespace App\Repositories\Fornecedor;

use App\DTO\Fornecedor\FornecedorCreateDTO;
use App\Models\Fornecedor;

class FornecedorEloquentRepository implements FornecedorRepositoryInterface
{
    public function __construct(
        protected Fornecedor $model
    ){ }

    public function getAll(array $filters): array
    {
        return $this->model->all()->toArray();
    }

    public function findOne(): \stdClass
    {
        return new \stdClass();
    }

    public function new(FornecedorCreateDTO $fornecedorCreateDTO): Fornecedor
    {
        return $this->model->create((array)$fornecedorCreateDTO);
    }
}
