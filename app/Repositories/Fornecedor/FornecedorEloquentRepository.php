<?php

namespace App\Repositories\Fornecedor;

use App\DTO\Fornecedor\FornecedorCreateDTO;
use App\Models\Fornecedor;
use App\Repositories\Interfaces\PaginationInterface;
use App\Repositories\Presenters\PaginationPresenter;

class FornecedorEloquentRepository implements FornecedorRepositoryInterface
{
    public function __construct(
        protected Fornecedor $model
    ){ }

    public function all(array $filters): array
    {
        return $this->model->all()->toArray();
    }

    public function find(): \stdClass
    {
        return new \stdClass();
    }

    public function new(FornecedorCreateDTO $fornecedorCreateDTO): Fornecedor
    {
        return $this->model->create((array)$fornecedorCreateDTO);
    }

    public function paginate(int $page = 1, int $totalPerPage = 15, string $filter = null): PaginationInterface
    {
        $result = $this->model->paginate($totalPerPage, ['*'], 'page', $page);

        return new PaginationPresenter($result);
    }
}
