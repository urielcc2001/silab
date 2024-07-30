<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultadoTextura extends Model
{
    use HasFactory;

    protected $fillable = [
        'determinacion_id',
        'temperatura1',
        'temperatura2',
        'lectura1',
        'lectura2',
        'peso_suelo',
        'peso_grava',
        'resultado'
    ];

    public function determinacion()
    {
        return $this->belongsTo(Determinacion::class);
    }
}
