<?php

namespace App\Repositories\Servidor;

use App\DTO\Servidor\ServidorStoreDTO;
use App\DTO\Servidor\ServidorUpdateDTO;
use App\Models\Servidor;
use App\Repositories\Interfaces\PaginationInterface;
use App\Repositories\Presenters\PaginationPresenter;

class ServidorEloquentRepository implements ServidorRepositoryInterface
{
    public function __construct(
        protected Servidor $model
    ){ }

    public function all(array $filters): array
    {
        return $this->model->all()->toArray();
    }

    public function find(string $uuid): Servidor
    {
        return $this->model->where("uuid", $uuid)->first();
    }

    public function new(ServidorStoreDTO $servidorStoreDTO): Servidor
    {
        return $this->model->create((array)$servidorStoreDTO);
    }

    public function paginate(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface
    {
        $query = $this->model->query()
                ->with('cargo');


        if (!is_null($filter)) {
            $query->where("nome", "like", "%{$filter}%");
        }

        $query->orderBy('updated_at', 'desc');

        $result = $query->paginate($totalPerPage, ['*'], 'page', $page);
        // dd($result);
        return new PaginationPresenter($result);
    }


}
