<?php

use App\Http\Controllers\App\Dashboard\DashboardIndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App\Servidor\ServidorCreateController;
use App\Http\Controllers\App\Servidor\ServidorEditController;
use App\Http\Controllers\App\Servidor\ServidorIndexController;
use App\Http\Controllers\App\Servidor\ServidorShowController;
use App\Http\Controllers\App\Servidor\ServidorStoreController;
use App\Http\Controllers\App\Servidor\ServidorUpdateController;
use App\Http\Controllers\App\Usuario\UsuarioCreateController;
use App\Http\Controllers\App\Usuario\UsuarioEditController;
use App\Http\Controllers\App\Usuario\UsuarioIndexController;
use App\Http\Controllers\App\Usuario\UsuarioShowController;
use App\Http\Controllers\App\Usuario\UsuarioStoreController;
use App\Http\Controllers\App\Usuario\UsuarioUpdateController;

Route::get('usuario/show/{uuid}', [UsuarioShowController::class, 'show'])->name('usuario.show');
Route::get('/usuario/create', [UsuarioCreateController::class, 'create'])->name('usuario.create');
Route::put('/usuario/{user}', [UsuarioUpdateController::class, 'update'])->name('usuario.update');
Route::get('/usuario', [UsuarioIndexController::class, 'index'])->name('usuario.index');
Route::get('/usuario/edit/{user}', [UsuarioEditController::class, 'edit'])->name('usuario.edit');
Route::post('/usuario', [UsuarioStoreController::class, 'store'])->name('usuario.store');

Route::get('servidor/show/{uuid}', [ServidorShowController::class, 'show'])->name('servidor.show');
Route::get('/servidor/create', [ServidorCreateController::class, 'create'])->name('servidor.create');
Route::put('/servidor/{servidor}', [ServidorUpdateController::class, 'update'])->name('servidor.update');
Route::get('/servidor', [ServidorIndexController::class, 'index'])->name('servidor.index');
Route::get('/servidor/edit/{servidor}', [ServidorEditController::class, 'edit'])->name('servidor.edit');
Route::post('/servidor', [ServidorStoreController::class, 'store'])->name('servidor.store');

Route::get('/', [DashboardIndexController::class, 'index'])->name('dashboard.index');

Route::get('fornecedor', [\App\Http\Controllers\App\Fornecedor\FornecedorIndexController::class, 'index'])->name('fornecedor.index');
Route::get('fornecedor/create', [\App\Http\Controllers\App\Fornecedor\FornecedorCreateController::class, 'create'])->name('fornecedor.create');
Route::post('fornecedor', [\App\Http\Controllers\App\Fornecedor\FornecedorStoreController::class, 'store'])->name('fornecedor.store');
Route::get('fornecedor/{uuid}/show', [\App\Http\Controllers\App\Fornecedor\FornecedorShowController::class, 'show'])->name('fornecedor.show');
Route::get('fornecedor/{uuid}/edit', [\App\Http\Controllers\App\Fornecedor\FornecedorEditController::class, 'edit'])->name('fornecedor.edit');
Route::put('fornecedor/{uuid}/update', [\App\Http\Controllers\App\Fornecedor\FornecedorUpdateController::class, 'update'])->name('fornecedor.update');


Route::get('cargo/create', [\App\Http\Controllers\App\Cargo\CargoCreateController::class, 'create'])->name('cargo.create');
Route::post('cargo', [\App\Http\Controllers\App\Cargo\CargoStoreController::class, 'store'])->name('cargo.store');
Route::get('cargo', [\App\Http\Controllers\App\Cargo\CargoIndexController::class, 'index'])->name('cargo.index');
Route::get('cargo/{uuid}/show', [\App\Http\Controllers\App\Cargo\CargoShowController::class, 'show'])->name('cargo.show');
Route::get('cargo/{uuid}/edit', [\App\Http\Controllers\App\Cargo\CargoEditController::class, 'edit'])->name('cargo.edit');
Route::put('cargo/{uuid}/update', [\App\Http\Controllers\App\Cargo\CargoUpdateController::class, 'update'])->name('cargo.update');


Route::get('modelo/create', [\App\Http\Controllers\App\ModeloAvaliacao\ModeloAvaliacaoCreateController::class, 'create'])->name('modelo.create');
Route::post('modelo', [\App\Http\Controllers\App\ModeloAvaliacao\ModeloAvaliacaoStoreController::class, 'store'])->name('modelo.store');
