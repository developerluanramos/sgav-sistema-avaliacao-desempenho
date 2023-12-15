<?php

namespace App\Repositories\Vinculo;

use App\DTO\Vinculo\VinculoStoreDTO;
use App\Models\Vinculo;

class VinculoEloquentRepository implements VinculoRepositoryInterface
{
    public function __construct(
        protected Vinculo $model
    ){}

    public function new(VinculoStoreDTO $vinculoStoreDTO): Vinculo
    {
        return $this->model->create((array)$vinculoStoreDTO);
    }
}
