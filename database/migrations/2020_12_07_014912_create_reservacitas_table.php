<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservacitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservacitas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',60);
            $table->string('apellido',60);
            $table->string('num_cedula',60);
            $table->string('num_celular')->nullable();
            $table->foreignId('agenda_id')->constrained('agendas');
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
        Schema::dropIfExists('reservacitas');
    }
}
