<?php

namespace App\Actions\ModeloAvaliacao;

use App\Enums\FinalidadeModeloEnum;

class ModeloAvaliacaoCreateAction
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
