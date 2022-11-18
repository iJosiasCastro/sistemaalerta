<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfermeros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_y_apellido');
            $table->integer('dni')->nullable();
            $table->integer('telefono')->nullable();
            $table->text('detalles')->nullable();
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
        Schema::dropIfExists('enfermeros');
    }
};
