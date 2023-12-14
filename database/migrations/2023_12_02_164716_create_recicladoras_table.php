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
        Schema::create('recicladoras', function (Blueprint $table) {
            $table->id('Id_recicladora');
            $table->string('Nombre_recicladora', 100);
            $table->string('Razon_social', 75);
            $table->string('Direccion', 100);
            $table->string('Descripcion', 150);
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
        Schema::dropIfExists('recicladoras');
    }
};
