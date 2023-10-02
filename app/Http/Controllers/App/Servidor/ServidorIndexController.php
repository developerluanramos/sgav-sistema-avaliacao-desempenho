<?php

namespace App\Http\Controllers\App\Servidor;

use App\Http\Controllers\Controller;


class ServidorIndexController extends Controller
{

    public function index()
    {
        return view('app.servidor.index');
    }
}
