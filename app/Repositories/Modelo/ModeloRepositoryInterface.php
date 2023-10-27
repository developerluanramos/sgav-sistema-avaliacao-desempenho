<?php

namespace App\Repositories\Modelo;

use App\DTO\Modelo\ModeloStoreDTO;
use App\Models\Modelo;

interface ModeloRepositoryInterface
{
    public function new(ModeloStoreDTO $dto): Modelo;    
}
