<?php

namespace App\DTO\Servidor;

use App\DTO\BaseDTO;
use App\Http\Requests\App\Servidor\ServidorUpdateRequest;

class ServidorUpdateDTO extends BaseDTO
{
    public function __construct(
        public string $id,
        public string $nome,
        public string $email,
        public string $data_nascimento,
        public string $data_admissao,
        public string $cargo_uuid,
        public string $matricula
    ) { }

    public static function makeFromRequest(ServidorUpdateRequest $request)
    {
        return new self(
            $request->id,
            $request->nome,
            $request->email,
            $request->data_nascimento,
            $request->data_admissao,
            $request->cargo_uuid,
            $request->matricula
        );
    }
}
