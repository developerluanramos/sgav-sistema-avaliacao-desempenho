<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App\Servidor\ServidorCreateController;
use App\Http\Controllers\App\Servidor\ServidorEditController;
use App\Http\Controllers\App\Servidor\ServidorIndexController;
use App\Http\Controllers\App\Servidor\ServidorShowController;
use App\Http\Controllers\App\Servidor\ServidorStoreController;
use App\Http\Controllers\App\Servidor\ServidorUpdateController;
use App\Models\Servidor;


Route::get('servidor/show/{uuid}', [ServidorShowController::class, 'show'])->name('servidor.show');
Route::get('/servidor/create', [ServidorCreateController::class, 'create'])->name('servidor.create');
Route::put('/servidor/{servidor}', [ServidorUpdateController::class, 'update'])->name('servidor.update');
Route::get('/servidor', [ServidorIndexController::class, 'index'])->name('servidor.index');
Route::get('/servidor/edit/{servidor}', [ServidorEditController::class, 'edit'])->name('servidor.edit');
Route::post('/servidor', [ServidorStoreController::class, 'store'])->name('servidor.store');
Route::delete('/servidor/{servidor}', [ServidorController::class, 'destroy'])->name('servidor.destroy');

Route::get('/', function () {
    return view('app.home');
})->name('dashboard');

Route::get("/test-01", function () {
   function playGame(array $gameFormation): int {
       $score = [];

       foreach ($gameFormation as $index => $gameCaracter ) {
           echo ("<pre>".json_encode($score)."</pre>");
           switch ($gameCaracter) {
               case '+':
                   $score[] = $score[$index-1] + $score[$index-2];
                   break;

               case 'C':
                   unset($score[count($score)-1]);
                   break;

               case 'D':
                   //$score[] = $score[$index-1] * 2;
                   break;

               default:
                   $score[] = $gameCaracter;
                   break;
           }
       }
        //dd($score);
       return array_sum($score);
   }

   echo playGame(explode(" ", "5 2 C D +"));
});

Route::get('fornecedor', [\App\Http\Controllers\App\Fornecedor\FornecedorIndexController::class, 'index'])->name('fornecedor.index');
Route::get('fornecedor/create', [\App\Http\Controllers\App\Fornecedor\FornecedorCreateController::class, 'create'])->name('fornecedor.create');
Route::post('fornecedor', [\App\Http\Controllers\App\Fornecedor\FornecedorStoreController::class, 'store'])->name('fornecedor.store');
Route::get('fornecedor/{uuid}/show', [\App\Http\Controllers\App\Fornecedor\FornecedorShowController::class, 'show'])->name('fornecedor.show');
Route::get('fornecedor/{uuid}/edit', [\App\Http\Controllers\App\Fornecedor\FornecedorEditController::class, 'edit'])->name('fornecedor.edit');
Route::put('fornecedor/{uuid}/update', [\App\Http\Controllers\App\Fornecedor\FornecedorUpdateController::class, 'update'])->name('fornecedor.update');

