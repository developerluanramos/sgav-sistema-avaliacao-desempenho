<?php

namespace App\Providers;

use App\Models\Fornecedor;
use App\Observers\FornecedorObserver;
use App\Repositories\Fornecedor\FornecedorEloquentRepository;
use App\Repositories\Fornecedor\FornecedorRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            FornecedorRepositoryInterface::class, FornecedorEloquentRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fornecedor::observe(FornecedorObserver::class);
    }
}
