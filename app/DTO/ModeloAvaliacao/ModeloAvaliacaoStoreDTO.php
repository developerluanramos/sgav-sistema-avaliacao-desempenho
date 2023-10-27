<?php

namespace App\DTO\ModeloAvaliacao;

use App\Enums\FinalidadeModeloEnum;
use App\Enums\SituacaoModeloEnum;
use App\Http\Requests\App\ModeloAvaliacao\ModeloAvaliacaoStoreRequest;

class ModeloAvaliacaoStoreDTO {
    public function __construct(
        public string $nome,
        public string $situacao,
        public string $finalidade
    ) {}

    public static function makeFromRequest(ModeloAvaliacaoStoreRequest $request): self
    {
        return new self(
            $request->nome,
            SituacaoModeloEnum::getValue(SituacaoModeloEnum::getKey((int)$request->situacao)),
            FinalidadeModeloEnum::getValue($request->finalidade),
        );
    }
}