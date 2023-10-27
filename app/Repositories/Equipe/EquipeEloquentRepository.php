<?php

namespace App\Repositories\Equipe;

use App\DTO\Equipe\EquipeStoreDTO;
use App\Models\Equipe;

class EquipeEloquentRepository implements EquipeRepositoryInterface
{
    protected $model;

    public function __construct(Equipe $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function new(EquipeStoreDTO $dto): Equipe
    {
        return $this->model->create((array) $dto);
    }
}
