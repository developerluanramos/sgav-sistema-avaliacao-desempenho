<?php

namespace App\Repositories\ModeloAvaliacao;

use App\DTO\ModeloAvaliacao\ModeloAvaliacaoStoreDTO;
use App\Models\ModeloAvaliacao;

class ModeloAvaliacaoEloquentRepository implements ModeloAvaliacaoRepositoryInterface
{
    
    public function __construct(protected ModeloAvaliacao $model)
    { }
    
    public function new(ModeloAvaliacaoStoreDTO $dto): ModeloAvaliacao
    {
        return $this->model->create((array)$dto);
    }

}
