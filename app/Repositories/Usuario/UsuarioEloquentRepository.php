<?php

namespace App\Repositories\Usuario;

use App\DTO\Usuario\UsuarioStoreDTO;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UsuarioEloquentRepository implements UsuarioRepositoryInterface
{
    public function __construct(
        protected User $model
    ){ }

    public function all(array $filters): array
    {
        return $this->model->all()->toArray();
    }

    public function new(UsuarioStoreDTO $usuarioStoreDTO): User
    {
        return $this->model->create((array)$usuarioStoreDTO);
    }

    public function find(string $uuid): User
    {
        return $this->model->where("uuid", $uuid)->first();
    }

    // public function delete(int $id): bool
    // {
    //     $usuario = $this->find($id);

    //     if (!$usuario) {
    //         return false;
    //     }

    //     return $usuario->delete();
    // }
}
