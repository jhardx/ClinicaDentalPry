<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id('id_consulta');
            $table->timestamp('fecha');
            $table->time('hora', $precision = 0);
            $table->char('duracion', 10);
            $table->float('precio', 8, 2);
            $table->foreignId('id_odontologo');
            $table->foreignId('id_paciente');
            $table->foreignId('id_comprobante');
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
        Schema::dropIfExists('consultas');
    }
}
