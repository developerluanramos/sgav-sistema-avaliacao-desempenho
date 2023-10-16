<?php

namespace App\Actions\Usuario;

use App\DTO\Usuario\UsuarioStoreDTO;
use App\Models\Usuario;
use App\Repositories\Usuario\UsuarioRepositoryInterface;

class UsuarioStoreAction
{
    public function __construct(
        protected UsuarioRepositoryInterface $repository
    ) { }

    public function exec(UsuarioStoreDTO $dto): Usuario
    {
        return $this->repository->create($dto);
    }
}
