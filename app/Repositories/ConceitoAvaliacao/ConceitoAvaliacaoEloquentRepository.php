<?php

namespace App\Repositories\ConceitoAvaliacao;

use App\DTO\ConceitoAvaliacao\ConceitoAvaliacaoStoreDTO;
use App\Models\ConceitoAvaliacao;
use App\Repositories\Interfaces\PaginationInterface;
use App\Repositories\Presenters\PaginationPresenter;

class ConceitoAvaliacaoEloquentRepository implements ConceitoAvaliacaoRepositoryInterface
{
    public function __construct(
        protected ConceitoAvaliacao $model
    ){ }
    
    public function new(ConceitoAvaliacaoStoreDTO $conceitoAvaliacaoStoreDTO): ConceitoAvaliacao
    {
        return $this->model->create((array)$conceitoAvaliacaoStoreDTO);
    }

    public function paginate(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface
    {
        $query = $this->model->query()->with('itensConceitosAvaliacao');

        if(!is_null($filter)) {
            $query->where("descricao", "like", "%".$filter."%");
        }

        $query->orderBy('updated_at', 'desc');

        $result = $query->paginate($totalPerPage, ['*'], 'page', $page);

        return new PaginationPresenter($result);
    }
}
