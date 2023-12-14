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
        Schema::create('recolectores', function (Blueprint $table) {
            $table->id('id_recolector');
            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->string('cc_identificacion', 50);
            $table->unsignedBigInteger('recicladoras_Id_recicladora');
            $table->unsignedBigInteger('rutas_id_ruta');
            $table->unsignedBigInteger('localidades_id_localidad');
            $table->timestamps();

            
            $table->index('recicladoras_Id_recicladora');
            $table->index('rutas_id_ruta');
            $table->index('localidades_id_localidad');

            $table->foreign('recicladoras_Id_recicladora')
                ->references('Id_recicladora')
                ->on('recicladoras')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('rutas_id_ruta')
                ->references('id_ruta')
                ->on('rutas')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('localidades_id_localidad')
                ->references('id_localidad')
                ->on('localidades')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recolectores');
    }
};
