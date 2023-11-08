<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConceitoAvaliacao extends Model
{
    use HasFactory;

    protected $table = 'conceitos_avaliacao';

    protected $fillable = [
        'uuid',
        'descricao',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

    function itensConceitosAvaliacao() {
        return $this->hasMany(ItemConceitoAvaliacao::class, 'conceito_avaliacao_uuid', 'uuid');
    }
}
