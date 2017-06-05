<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBilheteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('bilhete', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('idBilhete');
            $table->Integer('bilhete_evento')->unsigned()->nullable();
            $table->foreign('bilhete_evento')->references('idEvento')->on('evento');
            $table->String('bilhete_usuario');
            $table->foreign('bilhete_usuario')->references('cpf')->on('usuario');
            $table->Integer('bilhete_assento')->unsigned()->nullable();   
            $table->foreign('bilhete_assento')->references('idAssento')->on('assento');
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
        Schema::dropIfExists('bilhete');
    }
}
