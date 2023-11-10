<?php

namespace App\Providers;

use App\Models\Cargo;
use App\Models\ConceitoAvaliacao;
use App\Models\Equipe;
use App\Models\Fornecedor;
use App\Models\ItemConceitoAvaliacao;
use App\Models\ModeloAvaliacao;
use App\Models\Servidor;
use App\Observers\CargoObserver;
use App\Models\User;
use App\Observers\ConceitoAvaliacaoObserver;
use App\Observers\EquipeObserver;
use App\Observers\FornecedorObserver;
use App\Observers\ItemConceitoAvaliacaoObserver;
use App\Observers\ModeloAvaliacaoObserver;
use App\Observers\ServidorObserver;
use App\Observers\UsuarioObserver;
use App\Repositories\Cargo\CargoEloquentRepository;
use App\Repositories\Cargo\CargoRepositoryInterface;
use App\Repositories\ConceitoAvaliacao\ConceitoAvaliacaoEloquentRepository;
use App\Repositories\ConceitoAvaliacao\ConceitoAvaliacaoRepositoryInterface;
use App\Repositories\ItemConceitoAvaliacao\ItemConceitoAvaliacaoEloquentRepository;
use App\Repositories\ItemConceitoAvaliacao\ItemConceitoAvaliacaoRepositoryInterface;
use App\Repositories\Equipe\EquipeEloquentRepository;
use App\Repositories\Equipe\EquipeRepositoryInterface;
use App\Repositories\Fornecedor\FornecedorEloquentRepository;
use App\Repositories\Fornecedor\FornecedorRepositoryInterface;
use App\Repositories\ModeloAvaliacao\ModeloAvaliacaoEloquentRepository;
use App\Repositories\ModeloAvaliacao\ModeloAvaliacaoRepositoryInterface;
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
            ModeloAvaliacaoRepositoryInterface::class, ModeloAvaliacaoEloquentRepository::class
        );

        $this->app->bind(
            EquipeRepositoryInterface::class, EquipeEloquentRepository::class
        );

        $this->app->bind(
            ConceitoAvaliacaoRepositoryInterface::class, ConceitoAvaliacaoEloquentRepository::class
        );

        $this->app->bind(
            ItemConceitoAvaliacaoRepositoryInterface::class, ItemConceitoAvaliacaoEloquentRepository::class
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
        ModeloAvaliacao::observe(ModeloAvaliacaoObserver::class);
        Equipe::observe(EquipeObserver::class);
        ConceitoAvaliacao::observe(ConceitoAvaliacaoObserver::class);
        ItemConceitoAvaliacao::observe(ItemConceitoAvaliacaoObserver::class);
    }
}
