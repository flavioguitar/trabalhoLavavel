<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('assento', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('idAssento');
            $table->Integer('assento_evento')->unsigned();
            $table->foreign('assento_evento')->references('idEvento')->on('evento');
            $table->Integer('numero');
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
        Schema::dropIfExists('assento');
    }
}
