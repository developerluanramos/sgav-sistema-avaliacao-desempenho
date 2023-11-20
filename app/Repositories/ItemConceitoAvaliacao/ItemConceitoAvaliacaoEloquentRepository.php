<?php

namespace App\Repositories\ItemConceitoAvaliacao;

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

    public function findByUuid(string $uuid): ItemConceitoAvaliacao
    {
        return $this->model->where('uuid', $uuid)->first();
    }

    public function delete(string $uuid): void
    {
        $item = $this->findByUuid($uuid);

        $item->delete();
    }
}
