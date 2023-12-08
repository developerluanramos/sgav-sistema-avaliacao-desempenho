<?php

namespace App\DTO\Departamento;

class DepartamentoStoreDTO
{
    public function __construct(
        public string $nome,
        public string $postos_trabalho_uuid,
        public string $setor_uuid
    ) {}

    public static function makeFromRequest(SetorStoreRequest $request): self
    {
        return new self(
            $request->nome,
            $request->postos_trabalho_uuid,
            $request->setor_uuid,
        );
    }
}
