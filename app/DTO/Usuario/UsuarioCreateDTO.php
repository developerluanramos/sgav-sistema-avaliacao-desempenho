<?php

namespace App\DTO\Usuario;

use App\DTO\BaseDTO;
use App\Http\Requests\App\Usuario\UsuarioCreateRequest;

class UsuarioCreateDTO extends BaseDTO
{
    public function __construct(
        public string $uuid,
        public string $nome,
        public string $email,
        public bool $situacao
    ) { }

    public static function makeFromRequest(UsuarioCreateRequest $request)
    {
        return new self(
            $request->uuid,
            $request->nome,
            $request->email,
            $request->situacao
        );
    }
}
