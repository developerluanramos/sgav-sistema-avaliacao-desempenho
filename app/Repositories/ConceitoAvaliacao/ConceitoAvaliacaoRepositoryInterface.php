<?php

namespace App\Repositories\ConceitoAvaliacao;

use App\DTO\ConceitoAvaliacao\ConceitoAvaliacaoStoreDTO;
use App\Models\ConceitoAvaliacao;
use App\Repositories\Interfaces\PaginationInterface;

interface ConceitoAvaliacaoRepositoryInterface
{
    public function new(ConceitoAvaliacaoStoreDTO $conceitoAvaliacaoStoreDTO): ConceitoAvaliacao;

    public function all(): array;
}
