<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Determinacion extends Model
{
    use HasFactory;

    protected $fillable = ['tipo_muestra_id', 'nombre'];

    public function tipoMuestra()
    {
        return $this->belongsTo(TipoMuestra::class);
    }

    public function resultadosTextura()
    {
        return $this->hasMany(ResultadoTextura::class);
    }

    public function pesos()
    {
        return $this->hasMany(Peso::class);
    }
}
