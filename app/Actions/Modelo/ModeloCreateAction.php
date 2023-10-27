<?php

namespace App\Actions\Modelo;

use App\Enums\FinalidadeModeloEnum;

class ModeloCreateAction
{
    public function __construct(
    ) { }

    public function exec(): array
    {
        return [
            "finalidade" => FinalidadeModeloEnum::asArray()
        ];
    }
}
