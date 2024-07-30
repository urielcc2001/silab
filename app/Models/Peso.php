<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peso extends Model
{
    use HasFactory;

    protected $fillable = ['determinacion_id', 'numero_registro', 'peso'];

    public function determinacion()
    {
        return $this->belongsTo(Determinacion::class);
    }
}
