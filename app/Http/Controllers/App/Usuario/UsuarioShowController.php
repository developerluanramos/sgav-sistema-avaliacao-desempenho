<?php

namespace App\Http\Controllers\App\Usuario;

use App\Actions\Usuario\UsuarioShowAction;
use App\DTO\Usuario\UsuarioShowDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Usuario\UsuarioShowRequest;

class UsuarioShowController extends Controller
{
    public function __construct(
        protected UsuarioShowAction $showAction
    ) {}

    public function show(string $uuid, UsuarioShowRequest $storeRequest)
    {
        $storeRequest->merge([
            "uuid" => $uuid
        ]);

        $user = $this->showAction->exec(UsuarioShowDTO::makeFromRequest($storeRequest));

        return view('app.usuario.show', [
            "user" => $user
        ]);
    }
}
