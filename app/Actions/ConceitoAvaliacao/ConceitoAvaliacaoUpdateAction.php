<?php

namespace App\Actions\ConceitoAvaliacao;

use App\DTO\ConceitoAvaliacao\ConceitoAvaliacaoUpdateDTO;
use App\Models\ConceitoAvaliacao;
use App\Repositories\ConceitoAvaliacao\ConceitoAvaliacaoRepositoryInterface;

class ConceitoAvaliacaoUpdateAction {

    public function __construct(
        protected ConceitoAvaliacaoRepositoryInterface $repository
    )
    { }

    public function exec(ConceitoAvaliacaoUpdateDTO $dto): ConceitoAvaliacao 
    {
        return $this->repository->update($dto);
    }

}