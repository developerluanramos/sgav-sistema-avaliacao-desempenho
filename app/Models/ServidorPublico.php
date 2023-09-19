<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServidorPublico extends Model
{
    use HasFactory;

    protected $table = 'servidores_publicos';

    protected $fillable = [
        'nome',
        'email',
        'data_nascimento',
        'data_admissao',
        'cargo_uuid',
        'matricula',
    ];

    public function cargo()
    {
        return $this->belongsTo(Cargo::class, 'cargo_uuid', 'uuid');
    }


}
