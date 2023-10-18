<?php

namespace App\Repositories\Usuario;

use App\DTO\Usuario\UsuarioStoreDTO;
use App\Models\User;
use App\Repositories\Interfaces\PaginationInterface;
use App\Repositories\Presenters\PaginationPresenter;
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

    public function paginate(int $page = 1, int $totalPerPage = 15, string $filter = null): PaginationInterface
    {
        $query = $this->model->query();

        if(!is_null($filter)) {
            $query->where("name", "like", "%".$filter."%");
        }

        $query->orderBy('updated_at', 'desc');

        $result = $query->paginate($totalPerPage, ['*'], 'page', $page);

        return new PaginationPresenter($result);
    }

}
