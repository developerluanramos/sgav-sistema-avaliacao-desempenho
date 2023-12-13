<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CicloAvaliativo extends Model
{
    use HasFactory;

    protected $table = "ciclos_avaliativos";

    protected $fillable = [
        "uuid",
        "status"
    ];
}
