<?php

namespace App\Repositories\ModeloAvaliacao;

use App\DTO\ModeloAvaliacao\ModeloAvaliacaoStoreDTO;
use App\Models\ModeloAvaliacao;

interface ModeloAvaliacaoRepositoryInterface
{
    public function new(ModeloAvaliacaoStoreDTO $dto): ModeloAvaliacao;    
}
