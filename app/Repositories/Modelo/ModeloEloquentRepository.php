<?php

namespace App\Repositories\Modelo;

use App\DTO\Modelo\ModeloStoreDTO;
use App\Models\Modelo;

class ModeloEloquentRepository implements ModeloRepositoryInterface
{
    
    public function __construct(protected Modelo $model)
    { }
    
    public function new(ModeloStoreDTO $dto): Modelo
    {
        return $this->model->create((array)$dto);
    }

}
