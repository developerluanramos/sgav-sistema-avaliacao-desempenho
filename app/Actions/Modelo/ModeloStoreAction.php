<?php

namespace App\Actions\Modelo;

use App\DTO\Modelo\ModeloStoreDTO;
use App\Models\Modelo;
use App\Repositories\Modelo\ModeloRepositoryInterface;

class ModeloStoreAction
{
    public function __construct(
        protected ModeloRepositoryInterface $repository
    ) { }

    public function exec(ModeloStoreDTO $dto): Modelo
    {
        return $this->repository->new($dto);
    }
}
