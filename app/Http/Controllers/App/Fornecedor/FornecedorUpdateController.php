<?php

namespace App\Http\Controllers\App\Fornecedor;

use App\Actions\Fornecedor\FornecedorUpdateAction;
use App\DTO\Fornecedor\FornecedorUpdateDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Fornecedor\FornecedorUpdateRequest;

class FornecedorUpdateController extends Controller
{
    public function __construct(
        protected FornecedorUpdateAction $storeAction
    ) {}

    public function update(FornecedorUpdateRequest $storeRequest)
    {
        $this->storeAction->exec(FornecedorUpdateDTO::makeFromRequest($storeRequest));

        return redirect()->route('fornecedor.index');
    }
}
