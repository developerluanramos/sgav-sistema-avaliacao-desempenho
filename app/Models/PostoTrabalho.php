<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostoTrabalho extends Model
{
    use HasFactory;

    protected $table = 'postos_trabalho';

    protected $fillable = [
        'nome',
        'uuid'
    ];

    public function setores()
    {
        $this->hasMany(Setor::class, 'postos_trabalho_uuid');
    }
}
