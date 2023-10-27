<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloAvaliacao extends Model
{
    use HasFactory;

    protected $table = 'modelos';

    protected $fillable = [
        'uuid',
        'nome',
        'situacao',
        'finalidade',
    ];

}
