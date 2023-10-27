<?php

namespace App\Repositories\Equipe;

use App\DTO\Equipe\EquipeStoreDTO;
use App\Models\Equipe;

interface EquipeRepositoryInterface
{
    public function all();

    public function new(EquipeStoreDTO $dto): Equipe;
}
