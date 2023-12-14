<?php

namespace App\Repositories\Vinculo;

use App\DTO\Vinculo\VinculoStoreDTO;
use App\Models\Vinculo;

interface VinculoRepositoryInterface
{
    public function new(VinculoStoreDTO $vinculoStoreDTO): Vinculo;
}
