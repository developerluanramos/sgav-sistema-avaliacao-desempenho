<?php

use App\Http\Controllers\App\Dashboard\DashboardIndexController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth.basic'])->group(function() {
    Route::get('/dashboard', [DashboardIndexController::class, 'index'])->name('dashboard.index');
    Route::get('vinculo/create', [\App\Http\Controllers\App\Vinculo\VinculoCreateController::class, 'create'])->name('vinculo.create');

});
