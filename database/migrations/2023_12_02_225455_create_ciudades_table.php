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
        Schema::create('ciudades', function (Blueprint $table) {
            $table->id('id_Ciudad');
            $table->string('Descripcion', 75);
            $table->unsignedBigInteger('departamentos_id_departamento');
            $table->timestamps();

            
            $table->index('departamentos_id_departamento');

            $table->foreign('departamentos_id_departamento')
                ->references('id_departamento')
                ->on('departamentos')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciudades');
    }
};
