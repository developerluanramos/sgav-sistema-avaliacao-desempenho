<?php

namespace App\Providers;

use App\Models\Cargo;
use App\Models\Fornecedor;
use App\Models\Modelo;
use App\Models\Servidor;
use App\Observers\CargoObserver;
use App\Models\User;
use App\Observers\FornecedorObserver;
use App\Observers\ModeloObserver;
use App\Observers\ServidorObserver;
use App\Observers\UsuarioObserver;
use App\Repositories\Cargo\CargoEloquentRepository;
use App\Repositories\Cargo\CargoRepositoryInterface;
use App\Repositories\Fornecedor\FornecedorEloquentRepository;
use App\Repositories\Fornecedor\FornecedorRepositoryInterface;
use App\Repositories\Modelo\ModeloEloquentRepository;
use App\Repositories\Modelo\ModeloRepositoryInterface;
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
        
        $this->app->bind(
            ModeloRepositoryInterface::class, ModeloEloquentRepository::class
        );

    }


    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Cargo::observe(CargoObserver::class);
        Fornecedor::observe(FornecedorObserver::class);
        Servidor::observe(ServidorObserver::class);
        User::observe(UsuarioObserver::class);
        Modelo::observe(ModeloObserver::class);
    }
}
