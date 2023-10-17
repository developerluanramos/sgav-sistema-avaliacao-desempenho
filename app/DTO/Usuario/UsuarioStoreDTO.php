<?php

namespace App\DTO\Usuario;

use App\DTO\BaseDTO;
use App\Enums\SituacaoUsuarioEnum;
use App\Http\Requests\App\Usuario\UsuarioStoreRequest;

class UsuarioStoreDTO extends BaseDTO
{
    public function __construct(
        public string $name,
        public string $email,
        public bool $situacao
    ) { }

    public static function makeFromRequest(UsuarioStoreRequest $request)
    {
        return new self(
            $request->name,
            $request->email,
            SituacaoUsuarioEnum::getKey((boolval($request->situacao)))
        );
    }
}
