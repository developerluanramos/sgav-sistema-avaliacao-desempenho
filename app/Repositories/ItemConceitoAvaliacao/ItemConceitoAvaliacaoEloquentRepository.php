<?php

namespace App\Repositories\ItemConceitoAvaliacao;

use App\DTO\ConceitoAvaliacao\ConceitoAvaliacaoStoreDTO;
use App\Models\ItemConceitoAvaliacao;


class ItemConceitoAvaliacaoEloquentRepository implements ItemConceitoAvaliacaoRepositoryInterface
{
    public function __construct(
        protected ItemConceitoAvaliacao $model
    ){ }

    public function new(string $conceitoAvaliacaoUuid, array $itensConceitosAvaliacao): bool
    {
        foreach ($itensConceitosAvaliacao as $itemConceitoAvaliacao){
            $itemConceitoAvaliacao['conceito_avaliacao_uuid'] = $conceitoAvaliacaoUuid;
            $this->model->create($itemConceitoAvaliacao);
        }

        return true;
    }
}
