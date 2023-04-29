<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_medicos', function (Blueprint $table) {
            $table->id('id');
            $table->char('peso', 15);
            $table->char('talla', 15);
            $table->string('enfermedad', 200);
            $table->string('ciruguia', 200);
            $table->foreignId('paciente_id')->constrained('pacientes');
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
        Schema::dropIfExists('historial_medicos');
    }
}
