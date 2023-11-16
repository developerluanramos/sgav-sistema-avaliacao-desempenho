<?php

namespace App\Repositories\ItemConceitoAvaliacao;

use App\DTO\ConceitoAvaliacao\ConceitoAvaliacaoStoreDTO;
use App\Models\ItemConceitoAvaliacao;

interface ItemConceitoAvaliacaoRepositoryInterface
{
    public function new(string $conceitoAvaliacaoUuid, array $itensConceitosAvaliacao): bool;

    public function find(string $uuid): ItemConceitoAvaliacao;
    
    public function delete(string $uuid): void;

}
