<?php

namespace App\Http\Controllers\App\Fornecedor;

use App\Actions\Fornecedor\FornecedorIndexAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Fornecedor\FornecedorIndexRequest;

class FornecedorIndexController extends Controller
{
    public function __construct(
        protected FornecedorIndexAction $indexAction
    ) {}

    public function index(FornecedorIndexRequest $fornecedorIndexRequest)
    {
        $fornecedores = $this->indexAction->exec($fornecedorIndexRequest->all());

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
