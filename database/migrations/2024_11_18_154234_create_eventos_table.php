<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('eventos', function (Blueprint $tabla) {
            $tabla->id();
            $tabla->string('titulo');
            $tabla->text('descripcion')->nullable();
            $tabla->dateTime('inicio');
            $tabla->dateTime('fin');
            $tabla->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('eventos');
    }
};