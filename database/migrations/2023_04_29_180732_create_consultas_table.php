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
            $table->id('id');
            $table->timestamp('fecha_consulta');
            $table->time('hora', $precision = 0);
            $table->string('descripcion', 200);
            $table->float('precio', 8, 2);

            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            
            $table->unsignedBigInteger('comprobante_id')->unique();
            $table->foreign('comprobante_id')->references('id')->on('comprobantes');
      
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
