<?php

namespace App\Actions\Servidor;

use App\Enums\CargoEnum;
use App\Models\Cargo;

class ServidorCreateAction
{
    public function __construct()
    { }

    public function exec(): array
    {
        $cargos = Cargo::all();

        return [
            "cargos" => $cargos,
        ];
    }
}

