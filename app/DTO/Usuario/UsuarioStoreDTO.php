<?php

namespace App\DTO\Usuario;

use App\DTO\BaseDTO;
use App\Http\Requests\Usuario\UsuarioStoreRequest;

class UsuarioStoreDTO extends BaseDTO
{
    public function __construct(
        public string $uuid,
        public string $nome,
        public string $email,
        public bool $situacao
    ) { }

    public static function makeFromRequest(UsuarioStoreRequest $request)
    {
        return new self(
            $request->uuid,
            $request->nome,
            $request->email,
            $request->situacao
        );
    }
}
