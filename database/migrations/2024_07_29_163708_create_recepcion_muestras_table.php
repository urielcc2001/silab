<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recepcion_muestras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->string('muestra_folio', 50);
            $table->foreignId('tipo_muestra_id')->constrained('tipos_muestra')->onDelete('cascade');
            $table->string('procedencia', 150);
            $table->text('descripcion');
            $table->date('fecha_recepcion');
            $table->string('identificacion_interna', 50);
            $table->date('fecha_orden_trabajo');
            $table->enum('estatus', [
                'Recepción',
                'Pesado o Medida de Volumen',
                'Procesos de Análisis',
                'Toma de Lecturas',
                'Realización de Cálculos',
                'Reporte de Resultados',
            ]);
            $table->text('observaciones')->nullable();
            $table->foreignId('documento_recepcion')->nullable()->constrained('archivos')->onDelete('set null');
            $table->foreignId('documento_analisis')->nullable()->constrained('archivos')->onDelete('set null');
            $table->foreignId('documento_resultados')->nullable()->constrained('archivos')->onDelete('set null');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepcion_muestras');
    }
};
