<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecepcionMuestra extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'muestra_folio',
        'tipo_muestra_id',
        'procedencia',
        'descripcion',
        'fecha_recepcion',
        'identificacion_interna',
        'fecha_orden_trabajo',
        'estatus',
        'observaciones',
        'documento_recepcion',
        'documento_analisis',
        'documento_resultados'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function tipoMuestra()
    {
        return $this->belongsTo(TipoMuestra::class);
    }

    public function documentoRecepcion()
    {
        return $this->belongsTo(Archivo::class, 'documento_recepcion');
    }

    public function documentoAnalisis()
    {
        return $this->belongsTo(Archivo::class, 'documento_analisis');
    }

    public function documentoResultados()
    {
        return $this->belongsTo(Archivo::class, 'documento_resultados');
    }
}
