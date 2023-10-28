<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\AuthLoginAction;
use App\DTO\Auth\AuthLoginDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthLoginRequest;

class AuthLoginController extends Controller
{
    public function __construct(
        protected  AuthLoginAction $authLoginAction
    ) {

    }

    public function login(AuthLoginRequest $authLoginRequest)
    {
        $this->authLoginAction->exec(
            AuthLoginDTO::makeFromRequest($authLoginRequest),
            $authLoginRequest
        );

        return redirect()->route('dashboard.index');
    }
}
