<?php

namespace App\Actions\CicloAvaliativoPeriodicidade;

use App\DTO\CicloAvaliativoPeriodicidade\PeriodicidadeStoreDTO;

class PeriodicidadeStoreAction
{
    public function __construct() { }

    public function exec(PeriodicidadeStoreDTO $dto) : array
    {
        return (array) $dto;
    }
}
