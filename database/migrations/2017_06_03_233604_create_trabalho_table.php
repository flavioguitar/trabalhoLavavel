<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabalhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('idCategoria');
            $table->string('tipo');
            $table->timestamps();
        });
        Schema::create('evento', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('idEvento');
            $table->integer('evento_categoria')->unsigned();
            $table->foreign('evento_categoria')->references('idCategoria')->on('categoria');
            $table->text('descricao');
            $table->binary('cartaz');
            $table->date('data');
            $table->integer('QtdAssentos');
            $table->integer('AssentosDisponiveis');
            $table->timestamps();
        });
        Schema::create('assento', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('idAssento');
            $table->integer('assento_evento')->unsigned();
            $table->foreign('assento_evento')->references('idEvento')->on('evento');
            $table->integer('numero');
            $table->timestamps();
        });        
        Schema::create('usuario', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->string('cpf')->unique();
            $table->string('nome');
            $table->string('password');
            $table->timestamps();
        });
        Schema::create('bilhete', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('idBilhete');
            $table->Integer('bilhete_evento')->unsigned()->nullable();
            $table->string('bilhete_usuario')->unsigned()->nullable();
            $table->Integer('bilhete_assento')->unsigned()->nullable();            
            $table->timestamps();
            
            
        });
        
           Schema::table('bilhete', function($table) {
           $table->foreign('bilhete_evento')->references('idEvento')->on('evento');
           $table->foreign('bilhete_usuario')->references('cpf')->on('usuario');
           $table->foreign('bilhete_assento')->references('idAssento')->on('assento');
           
       });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria');
        Schema::dropIfExists('evento');
        Schema::dropIfExists('assento');
        Schema::dropIfExists('cliente');
        Schema::dropIfExists('bilhete');
    }
}
