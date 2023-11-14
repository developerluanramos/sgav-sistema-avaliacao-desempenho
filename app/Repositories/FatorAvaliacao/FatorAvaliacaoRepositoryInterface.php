<?php

namespace App\Repositories\FatorAvaliacao;

use App\DTO\FatorAvaliacao\FatorAvaliacaoStoreDTO;
use App\Models\FatorAvaliacao;

interface FatorAvaliacaoRepositoryInterface
{
    public function new(FatorAvaliacaoStoreDTO $fatorAvaliacaoStoreDTO): FatorAvaliacao;
}
