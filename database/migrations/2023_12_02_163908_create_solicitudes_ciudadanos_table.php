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
        Schema::create('solicitudes_ciudadanos', function (Blueprint $table) {
            
                $table->id('id_solicitud');
                $table->dateTime('fecha_inicio_solicitud');
                $table->dateTime('fecha_fin_solicitud');
                $table->text('descripcion_solicitud');
                $table->string('identificador_solicitiud', 75);
                $table->string('estado_solicitud', 45);
                $table->dateTime('fecha_recoleccion');
                $table->time('hora_recoleccion');
                
                $table->unsignedBigInteger('users_id');
                $table->timestamps();
    
                
                $table->index('users_id');
    
                $table->foreign('users_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('NO ACTION')
                    ->onUpdate('NO ACTION');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes_ciudadanos');
    }
};
