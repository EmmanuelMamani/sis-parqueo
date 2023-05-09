<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradaVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada_vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('vehiculo_placa');
            $table->date('fecha_entrada');
            $table->time('hora_entrada');
            $table->time('hora_salida');
            $table->integer('nro_plaza');
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
        Schema::dropIfExists('entrada_vehiculos');
    }
}
