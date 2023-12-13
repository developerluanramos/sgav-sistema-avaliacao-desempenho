<?php

namespace App\Repositories\CicloAvaliativo;

use App\Models\CicloAvaliativo;

class CicloAvaliativoEloquentRepository implements CicloAvaliativoRepositoryInterface
{
    protected $model;

    public function __construct(CicloAvaliativo $model)
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

    public function find(string $uuid): CicloAvaliativo
    {
        return $this->model
            ->where('uuid', $uuid)->first();
    }

    public function new(array $data): CicloAvaliativo
    {
        return $this->model->create($data);
    }

    public function update($uuid, $data): CicloAvaliativo
    {
        $this->model->where("uuid", $uuid)->update($data);

        return $this->find($uuid);
    }
}
