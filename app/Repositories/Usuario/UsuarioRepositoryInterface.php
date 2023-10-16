<?php

namespace App\Repositories\Usuario;

use App\DTO\Usuario\UsuarioStoreDTO;
use App\Models\Usuario;
use App\Repositories\Interfaces\PaginationInterface;

interface UsuarioRepositoryInterface
{
    public function all(array $filters): array;

    public function find(string $uuid): Usuario;

    public function create(UsuarioStoreDTO $usuarioStoreDTO): Usuario;

    public function update(Usuario $usuario, UsuarioStoreDTO $usuarioStoreDTO): Usuario;

    public function paginate(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface;
}
