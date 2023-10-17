<?php

namespace App\DTO\Cargo;

use App\Http\Requests\App\Cargo\CargoStoreRequest;

class CargoStoreDTO {
    public function __construct(
        public string $nome,
        public string $situacao
    ) {}

    public static function makeFromRequest(CargoStoreRequest $request): self
    {
        return new self(
            $request->nome,
            $request->situacao,
        );
    }
}