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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id('idEmpresa');
            $table->string('Nombre', 75);
            $table->string('Nit', 60);
            $table->string('Direccion', 100);
            $table->string('Descipcion_empresa', 100);
            $table->string('Razon_social', 100);
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
        Schema::dropIfExists('empresas');
    }
};
