<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id('id');
            $table->float('cantidad', 8, 2);
            $table->float('descuento', 8, 2);
            $table->float('subtotal', 8, 2);
            $table->float('total', 8, 2);
            $table->foreignId('proveedor_id')->constrained('proveedores');
            $table->foreignId('producto_id')->constrained('productos');
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
        Schema::dropIfExists('compras');
    }
}
