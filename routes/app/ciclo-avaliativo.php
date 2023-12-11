<?php

Route::prefix('ciclo-avaliativo')->group(function () {
    Route::get('', [\App\Http\Controllers\App\CicloAvaliativo\CicloAvaliativoIndexController::class, 'index'])->name('ciclo-avaliativo.index');

    Route::get('periodicidade/create', function() {
        return view('app.ciclo-avaliativo.periodicidade.create');
    })->name('ciclo-avaliativo.periodicidade.create');

    Route::post('periodicidade/store', function() {
        return redirect()->route('ciclo-avaliativo.incidencia.create');
    })->name('ciclo-avaliativo.periodicidade.store');

    Route::get('incidencia/create', function() {
        return view('app.ciclo-avaliativo.incidencia.create');
    })->name('ciclo-avaliativo.incidencia.create');

    Route::post('incidencia/store', function() {
        return redirect()->route('ciclo-avaliativo.template.create');
    })->name('ciclo-avaliativo.incidencia.store');

    Route::get('template/create', function() {
        return view('app.ciclo-avaliativo.template.create');
    })->name('ciclo-avaliativo.template.create');

    Route::post('template/store', function() {
        return redirect()->route('ciclo-avaliativo.dependencia.create');
    })->name('ciclo-avaliativo.template.store');

    Route::get('dependencia/create', function() {
        return view('app.ciclo-avaliativo.dependencia.create');
    })->name('ciclo-avaliativo.dependencia.create');

    Route::post('dependencia/store', function() {
        return redirect()->route('ciclo-avaliativo.index');
    })->name('ciclo-avaliativo.dependencia.store');
});
