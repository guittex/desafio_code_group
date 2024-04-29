<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSorteiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorteios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->unsignedBigInteger('jogador_id');
            $table->foreign('jogador_id')->references('id')->on('jogadores');
            $table->string('nome_time');
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
        Schema::dropIfExists('sorteios');
    }
}
