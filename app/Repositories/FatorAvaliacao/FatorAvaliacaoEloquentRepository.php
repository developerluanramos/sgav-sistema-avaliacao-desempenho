<?php

namespace App\Repositories\FatorAvaliacao;

use App\DTO\FatorAvaliacao\FatorAvaliacaoStoreDTO;
use App\Models\FatorAvaliacao;


class FatorAvaliacaoEloquentRepository implements FatorAvaliacaoRepositoryInterface
{
    public function __construct(
        protected FatorAvaliacao $model
    ){ }

    public function new(FatorAvaliacaoStoreDTO $fatorAvaliacaoStoreDTO): FatorAvaliacao
    {
        return $this->model->create((array)$fatorAvaliacaoStoreDTO);
    }
}
