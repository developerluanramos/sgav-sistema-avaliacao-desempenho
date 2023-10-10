<?php

namespace App\DTO\Servidor;

use App\DTO\BaseDTO;
use App\Http\Requests\App\Servidor\ServidorEditRequest;

class ServidorEditDTO extends BaseDTO
{
    public function __construct(
        public string $id
    ){ }

    public static function makeFromRequest(ServidorEditRequest $request)
    {
        return new self(
            $request->id
        );
    }
}
