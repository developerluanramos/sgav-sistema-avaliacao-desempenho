<?php

namespace App\Http\Controllers\App\Modelo;

use App\Actions\Modelo\ModeloStoreAction;
use App\DTO\Modelo\ModeloStoreDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Modelo\ModeloStoreRequest;

class ModeloStoreController extends Controller
{
    public function __construct(
        protected ModeloStoreAction $storeAction
    ) { }

    public function store(ModeloStoreRequest $storeRequest)
    {
        $this->storeAction->exec(ModeloStoreDTO::makeFromRequest($storeRequest));

        return redirect()->route('cargo.index')->with('message', 'Modelo criado');
    }
}
