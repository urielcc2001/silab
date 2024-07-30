<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_registro',
        'folio',
        'arch_nombre',
        'arch_descripcion',
        'arch_extension',
        'arch_ruta'
    ];
}
