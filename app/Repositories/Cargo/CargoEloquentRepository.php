<?php

namespace App\Repositories\Cargo;

use App\DTO\Cargo\CargoStoreDTO;
use App\Models\Cargo;

class CargoEloquentRepository implements CargoRepositoryInterface
{
    protected $model;

    public function __construct(Cargo $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($uuid)
    {
        return $this->model->where('uuid', $uuid)->first();
    }

    public function new(CargoStoreDTO $dto): array
    {
        $cargo = $this->model->create((array) $dto);   
        return $cargo->toArray();
    }
}
