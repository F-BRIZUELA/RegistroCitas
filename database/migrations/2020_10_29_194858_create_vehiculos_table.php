<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('placa',20);
            $table->string('chasis',50);
            $table->string('circulacion',50);            
            $table->string('motor',50);            
            $table->integer('numero_pasajeros');
            $table->foreignId('color_id')->constrained('colores');
            $table->foreignId('barrio_id')->constrained('barrios');
            $table->foreignId('propietario_id')->constrained('personas');
            $table->foreignId('combustible_id')->constrained('combustibles');
            $table->string('observaciones');
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
        Schema::dropIfExists('vehiculos');
    }
}
