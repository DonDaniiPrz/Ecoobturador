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
        Schema::create('barrios', function (Blueprint $table) {
            $table->id('id_barrio');
            $table->string('Nombre_barrio', 75);
            $table->unsignedBigInteger('localidades_id_localidad');
            $table->timestamps();

            
            $table->index('localidades_id_localidad');

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
        Schema::dropIfExists('barrios');
    }
};
