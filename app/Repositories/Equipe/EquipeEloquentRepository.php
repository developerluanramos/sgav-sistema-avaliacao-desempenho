<?php

namespace App\Repositories\Equipe;

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
}
