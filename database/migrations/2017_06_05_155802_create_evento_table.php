<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('evento', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('idEvento');
            $table->Integer('evento_categoria')->unsigned();
            $table->foreign('evento_categoria')->references('idCategoria')->on('categoria');
            $table->text('descricao');
            $table->String('cartaz');
            $table->date('data');
            $table->Integer('QtdAssentos');
            $table->Integer('AssentosDisponiveis');
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
        Schema::dropIfExists('evento');
    }
}
