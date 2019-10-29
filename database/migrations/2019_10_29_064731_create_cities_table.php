<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->enum('name', ['Santa Cruz de la Sierra', 'La Paz', 'Cochabamba', 'El Alto', 'Tarija'
            , 'Sucre', 'Trinidad', 'Potosí', 'Oruro', 'Cobija', 'Otra ciudad de Bolivia', 'Otra ciudad del extranjero']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
