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
        Schema::create('rutas', function (Blueprint $table) {
            $table->id('id_ruta');
            $table->string('descripcion_ruta', 75);
            $table->time('horario_ruta');
            $table->dateTime('fecha_ruta');
            $table->string('Ruta_realizada', 50);
            $table->unsignedBigInteger('recicladoras_Id_recicladora');
            $table->unsignedBigInteger('barrios_id_barrio');
            $table->unsignedBigInteger('solicitudes_ciudadanos_id_solicitud');
            $table->unsignedBigInteger('solicitudes_empresas_id_solicitud');
            $table->string('Motivo_cancelacion', 75);
            $table->timestamps();

           
            $table->index('recicladoras_Id_recicladora');
            $table->index('barrios_id_barrio');
            $table->index('solicitudes_ciudadanos_id_solicitud');
            $table->index('solicitudes_empresas_id_solicitud');

            $table->foreign('recicladoras_Id_recicladora')
                ->references('Id_recicladora')
                ->on('recicladoras')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('barrios_id_barrio')
                ->references('id_barrio')
                ->on('barrios')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('solicitudes_ciudadanos_id_solicitud')
                ->references('id_solicitud')
                ->on('solicitudes_ciudadanos')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('solicitudes_empresas_id_solicitud')
                ->references('id_solicitud')
                ->on('solicitudes_empresas')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rutas');
    }
};
