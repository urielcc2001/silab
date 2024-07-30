<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_cliente',
        'razon_social',
        'direccion',
        'correo_electronico',
        'telefono',
        'rfc'
    ];

    public function muestras()
    {
        return $this->hasMany(RecepcionMuestra::class);
    }
}
