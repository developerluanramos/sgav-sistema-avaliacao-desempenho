<?php

namespace App\Http\Controllers\App\Modelo;

use App\Actions\Modelo\ModeloCreateAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Modelo\ModeloCreateRequest;

class ModeloCreateController extends Controller
{
    public function __construct(
        protected ModeloCreateAction $createAction
    ) { }

    public function create(ModeloCreateRequest $createRequest)
    {
        $formData = $this->createAction->exec();

        return view('app.modelo.create', compact('formData'));
    }
}
