<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulants', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->integer('country'); //llave foranea
            $table->integer('city');    //llave foranea

            $table->string('direction')->nullable(); //Pueden ser nulos, solo la primera sesión
            $table->string('telephone')->nullable();
            $table->string('identity_card')->nullable();
            $table->date('birthday')->nullable();
            $table->integer('gender')->nullable();  
            
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
        Schema::dropIfExists('postulants');
    }
}
