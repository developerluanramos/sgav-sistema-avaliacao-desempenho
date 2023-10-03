<?php

namespace App\Http\Controllers\App\Servidor;

use App\Actions\Servidor\ServidorIndexAction;
use App\Http\Controllers\Controller;
use App\Models\Servidor;
use Illuminate\Http\Request;

class ServidorIndexController extends Controller
{
    public function __construct(
        protected ServidorIndexAction $indexAction
    ) {}

    public function index(Request $request)
    {
        $servidores = Servidor::with('cargo')
            ->paginate($request->get('totalPerPage', 15));

        return view('app.servidor.index', compact('servidores'));
    }
}
