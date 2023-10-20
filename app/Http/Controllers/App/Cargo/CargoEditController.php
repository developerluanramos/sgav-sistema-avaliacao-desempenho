<?php

namespace App\Http\Controllers\App\Cargo;

use App\Actions\Cargo\CargoCreateAction;
use App\Actions\Cargo\CargoEditAction;
use App\Actions\Cargo\CargoShowAction;
use App\DTO\Cargo\CargoEditDTO;
use App\DTO\Cargo\CargoShowDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Cargo\CargoEditRequest;
use App\Http\Requests\App\Cargo\CargoShowRequest;

class CargoEditController extends Controller
{
    public function __construct(
        protected CargoEditAction $editAction,
        // protected CargoCreateAction $createAction,
        protected CargoShowAction $showAction
    ) { }

    public function edit
    (string $uuid, 
    CargoEditRequest $editRequest, 
    CargoShowRequest $showRequest)
    {
        $editRequest->merge([
            "uuid" => $uuid
        ]);

        $showRequest->merge([
            "uuid" => $uuid
        ]);

        // $formData = $this->createAction->exec();
        $formData = $this->showAction->exec(CargoShowDTO::makeFromRequest($showRequest));
        $formData = $formData->only('nome', 'situacao');

        $editRequest->merge([
            "uuid" => $uuid
        ]);
        
        // dd($formData);

        $cargo = $this->editAction->exec(CargoEditDTO::makeFromRequest($editRequest));

        return view('app.cargo.edit', [
            "cargo" => $cargo,
            "formData" => $formData
        ]);
    }
}
