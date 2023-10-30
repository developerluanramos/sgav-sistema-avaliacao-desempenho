<?php

namespace App\Repositories\ModeloAvaliacao;

use App\DTO\ModeloAvaliacao\ModeloAvaliacaoStoreDTO;
use App\Models\ModeloAvaliacao;
use App\Repositories\Interfaces\PaginationInterface;

interface ModeloAvaliacaoRepositoryInterface
{
    public function new(ModeloAvaliacaoStoreDTO $dto): ModeloAvaliacao;
    
    public function paginate(int $page = 1, int $totalPerPage = 10, string $filter = null): PaginationInterface;
}
