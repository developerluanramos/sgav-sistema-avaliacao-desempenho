<?php

namespace App\Providers;

use App\Models\Fornecedor;
use App\Models\Servidor;
use App\Models\User;
use App\Observers\FornecedorObserver;
use App\Observers\ServidorObserver;
use App\Observers\UsuarioObserver;
use App\Repositories\Cargo\CargoEloquentRepository;
use App\Repositories\Cargo\CargoRepositoryInterface;
use App\Repositories\Fornecedor\FornecedorEloquentRepository;
use App\Repositories\Fornecedor\FornecedorRepositoryInterface;
use App\Repositories\Servidor\ServidorEloquentRepository;
use App\Repositories\Servidor\ServidorRepositoryInterface;
use App\Repositories\Usuario\UsuarioEloquentRepository;
use App\Repositories\Usuario\UsuarioRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            ServidorRepositoryInterface::class, ServidorEloquentRepository::class
        );

        $this->app->bind(
            FornecedorRepositoryInterface::class, FornecedorEloquentRepository::class
        );

        $this->app->bind(
            CargoRepositoryInterface::class, CargoEloquentRepository::class
        );

        $this->app->bind(
            UsuarioRepositoryInterface::class, UsuarioEloquentRepository::class
        );

    }


    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fornecedor::observe(FornecedorObserver::class);
        Servidor::observe(ServidorObserver::class);
        User::observe(UsuarioObserver::class);
    }
}
