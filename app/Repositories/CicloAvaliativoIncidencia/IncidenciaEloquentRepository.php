<?php

namespace App\Repositories\CicloAvaliativoIncidencia;

use App\DTO\CicloAvaliativoIncidencia\IncidenciaStoreDTO;
use App\Models\Incidencia;

class IncidenciaEloquentRepository implements IncidenciaRepositoryInterface
{
    protected $model;

    public function __construct(Incidencia $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function totalQuantity() : int {
        return $this->model->count();
    }

    public function find(string $uuid): Incidencia
    {
        return $this->model
            ->where('uuid', $uuid)->first();
    }

    public function new(string $cicloAvaliativoUuid, IncidenciaStoreDTO $dto): Incidencia
    {
        $data = (array) $dto;
        $data['ciclos_avaliativos_uuid'] = $cicloAvaliativoUuid;

        return $this->model->create($data);
    }
}
