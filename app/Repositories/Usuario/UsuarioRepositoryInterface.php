<?php

namespace App\Repositories\Usuario;

use App\DTO\Usuario\UsuarioStoreDTO;
use App\Models\User;
use App\Repositories\Interfaces\PaginationInterface;

interface UsuarioRepositoryInterface
{
    public function all(array $filters): array;

    public function find(string $uuid): User;

    public function new(UsuarioStoreDTO $usuarioStoreDTO): User;
}
