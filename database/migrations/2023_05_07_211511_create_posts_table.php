<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura2', function (Blueprint $table) {
            $table->id();
            $table->string("nombre")->nullable();
            $table->string("detalle")->nullable();
            $table->integer("ci")->nullable();
            $table->integer("monto")->nullable();
            $table->string("comprobante")->nullable();
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
        Schema::dropIfExists('posts');
    }
}
