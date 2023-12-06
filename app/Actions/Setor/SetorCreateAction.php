<?php

namespace App\Actions\Setor;

use App\Repositories\PostoTrabalho\PostoTrabalhoRepositoryInterface;

class SetorCreateAction
{
    public function __construct(
        protected PostoTrabalhoRepositoryInterface $repository
    ) { }

    public function exec(): array
    {
        $postosTrabalho = $this->repository->all();

        return [
            "postosTrabalho" => $postosTrabalho
        ];
    }
}


