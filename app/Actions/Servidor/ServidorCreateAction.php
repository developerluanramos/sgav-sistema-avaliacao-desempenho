<?php

namespace App\Actions\Servidor;

use App\Enums\CargoEnum;
use App\Models\Cargo;
use App\Repositories\Cargo\CargoRepositoryInterface;

class ServidorCreateAction
{
    public function __construct(
        protected CargoRepositoryInterface $cargoRepository
    ) { }
    public function exec(): array
    {
        $cargos = $this->cargoRepository->all();

        return [
            "cargos" => $cargos,
        ];
    }
}


