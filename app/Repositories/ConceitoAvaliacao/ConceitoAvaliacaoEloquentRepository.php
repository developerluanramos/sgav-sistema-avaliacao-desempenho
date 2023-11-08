<?php

namespace App\Repositories\ConceitoAvaliacao;

use App\DTO\ConceitoAvaliacao\ConceitoAvaliacaoStoreDTO;
use App\Models\ConceitoAvaliacao;


class ConceitoAvaliacaoEloquentRepository implements ConceitoAvaliacaoRepositoryInterface
{
    public function __construct(
        protected ConceitoAvaliacao $model
    ){ }
    
    public function new(ConceitoAvaliacaoStoreDTO $conceitoAvaliacaoStoreDTO): ConceitoAvaliacao
    {
        return $this->model->create((array)$conceitoAvaliacaoStoreDTO);
    }
}
