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
        Schema::create('localidades', function (Blueprint $table) {
            $table->id('id_localidad');
            $table->string('Nombre_localidad', 75);
            $table->unsignedBigInteger('ciudades_id_Ciudad');
            $table->timestamps();

            
            $table->index('ciudades_id_Ciudad');

            $table->foreign('ciudades_id_Ciudad')
                ->references('id_Ciudad')
                ->on('ciudades')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('localidades');
    }
};
