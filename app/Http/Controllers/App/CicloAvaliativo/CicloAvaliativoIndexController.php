<?php

namespace App\Http\Controllers\App\CicloAvaliativo;

use Symfony\Component\HttpFoundation\Request;

class CicloAvaliativoIndexController
{
    public function index(Request $request)
    {
        return view('app.ciclo-avaliativo.index');
    }
}
