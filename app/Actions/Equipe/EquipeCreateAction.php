<?php

namespace App\Actions\Equipe;

use App\Repositories\Equipe\EquipeRepositoryInterface;

class EquipeCreateAction
{
    public function __construct(
        protected EquipeRepositoryInterface $equipeRepository
    ) { }

    public function exec(): array
    {
        $equipes = $this->equipeRepository->all();

        return [
            "equipes" => $equipes,
        ];
    }
}


