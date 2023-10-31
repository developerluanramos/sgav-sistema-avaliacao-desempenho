<?php

namespace App\Repositories\ModeloAvaliacao;

use App\DTO\ModeloAvaliacao\ModeloAvaliacaoStoreDTO;
use App\Models\ModeloAvaliacao;
use App\Repositories\Interfaces\PaginationInterface;
use App\Repositories\Presenters\PaginationPresenter;

class ModeloAvaliacaoEloquentRepository implements ModeloAvaliacaoRepositoryInterface
{
    
    public function __construct(protected ModeloAvaliacao $model)
    { }
    
    public function new(ModeloAvaliacaoStoreDTO $dto): ModeloAvaliacao
    {
        return $this->model->create((array)$dto);
    }

    public function paginate(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface
    {
        $query = $this->model->query();

        if(!is_null($filter)) {
            $query->where("nome", "like", "%".$filter."%");
            $query->orWhere("situacao", "like", "%".$filter."%");
            $query->orWhere("finalidade", "like", "%".$filter."%");
        }

        $query->orderBy('updated_at', 'desc');

        $result = $query->paginate($totalPerPage, ['*'], 'page', $page);

        return new PaginationPresenter($result);
    }

}
