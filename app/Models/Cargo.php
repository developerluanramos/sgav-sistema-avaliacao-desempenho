<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = 'cargos';

    protected $fillable = [
        'uuid',
        'nome',
    ];

    public function servidores()
    {
        return $this->hasMany(Servidor::class, 'cargo_uuid', 'uuid');
    }
}
