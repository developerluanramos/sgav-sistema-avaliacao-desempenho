<?php

namespace App\Actions\ConceitoAvaliacao;

use App\DTO\ConceitoAvaliacao\ConceitoAvaliacaoUpdateDTO;
use App\Repositories\ConceitoAvaliacao\ConceitoAvaliacaoRepositoryInterface;
use App\Repositories\ItemConceitoAvaliacao\ItemConceitoAvaliacaoRepositoryInterface;

class ConceitoAvaliacaoUpdateAction {

    public function __construct(
        protected ConceitoAvaliacaoRepositoryInterface $conceitoAvaliacaoRepository,
        protected ItemConceitoAvaliacaoRepositoryInterface $itemConceitoAvaliacaoRepository,
    )
    { }

    public function exec(ConceitoAvaliacaoUpdateDTO $dto): array
    {
        $conceitoAvaliacao = $this->conceitoAvaliacaoRepository->update($dto);
        foreach($dto->itens_conceitos_avaliacao as $item) {
            if (!is_null($item['nome']) && !is_null($item['pontuacao'])) {
                $this->itemConceitoAvaliacaoRepository->new($conceitoAvaliacao->uuid, $dto->itens_conceitos_avaliacao);
            }
        }
        
        return [
            "conceitoAvaliacao" => $conceitoAvaliacao,
        ];
    }

}