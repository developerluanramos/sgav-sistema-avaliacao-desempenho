<?php

namespace App\Http\Controllers\App\Usuario;

use App\Http\Controllers\Controller;

class UsuarioIndexController extends Controller
{
    public function index()
    {
        return view('app.usuario.index');
    }
}
