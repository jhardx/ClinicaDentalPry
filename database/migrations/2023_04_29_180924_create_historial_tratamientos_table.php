<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialTratamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_tratamientos', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_tratamiento')->constrained('tratamientos');
            $table->foreignId('id_historial_medicos')->constrained('historial_medicos');
            $table->foreignId('id_comprobante')->constrained('comprobantes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_tratamientos');
    }
}
