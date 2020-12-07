<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombres',60);
            $table->string('apellidos',60);
            $table->string('identidad',60);
            $table->foreignId('sexo_id')->constrained('sexos');
            $table->foreignId('etnia_id')->constrained('etnias');
            $table->foreignId('barrio_id')->constrained('barrios');
            $table->string('direccion');
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
            $table->date('fecha_nacimiento');
            $table->foreignId('cooperativa_id')->nullable()->constrained('cooperativas');
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
        Schema::dropIfExists('personas');
    }
}
