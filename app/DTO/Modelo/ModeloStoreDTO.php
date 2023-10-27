<?php

namespace App\DTO\Modelo;

use App\Enums\FinalidadeModeloEnum;
use App\Enums\SituacaoModeloEnum;
use App\Http\Requests\App\Modelo\ModeloStoreRequest;

class ModeloStoreDTO {
    public function __construct(
        public string $nome,
        public string $situacao,
        public string $finalidade
    ) {}

    public static function makeFromRequest(ModeloStoreRequest $request): self
    {
        return new self(
            $request->nome,
            SituacaoModeloEnum::getValue(SituacaoModeloEnum::getKey((int)$request->situacao)),
            FinalidadeModeloEnum::getValue($request->finalidade),
        );
    }
}