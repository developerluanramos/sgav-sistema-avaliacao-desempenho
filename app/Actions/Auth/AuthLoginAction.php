<?php

namespace App\Actions\Auth;

use App\DTO\Auth\AuthLoginDTO;
use App\Http\Requests\Auth\AuthLoginRequest;
use Exception;
use Illuminate\Support\Facades\Auth;

class AuthLoginAction {

    public function __construct(

    ) { }

    public function exec(
        AuthLoginDTO $dto,
        AuthLoginRequest $authLoginRequest
        ): bool | Exception
    {
        if (Auth::attempt($$dto)) {
            return $authLoginRequest->session()->regenerate();
        }

        return new Exception("As Credenciais fornecidas são inválidas");
    }
}
