<?php

namespace App\Observers;

use App\Models\Modelo;
use Illuminate\Support\Str;

class ModeloObserver
{
    /**
     * Handle the Modelo "created" event.
     */
    public function creating(Modelo $modelo): void
    {
        $modelo->uuid = Str::uuid();
    }

    /**
     * Handle the Modelo "created" event.
     */
    public function created(Modelo $modelo): void
    {
        //
    }

    /**
     * Handle the Modelo "updated" event.
     */
    public function updated(Modelo $modelo): void
    {
        //
    }

    /**
     * Handle the Modelo "deleted" event.
     */
    public function deleted(Modelo $modelo): void
    {
        //
    }

    /**
     * Handle the Modelo "restored" event.
     */
    public function restored(Modelo $modelo): void
    {
        //
    }

    /**
     * Handle the Modelo "force deleted" event.
     */
    public function forceDeleted(Modelo $modelo): void
    {
        //
    }
}
