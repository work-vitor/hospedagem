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
        Schema::create('quartos', function (Blueprint $table) {
            $table->id();
            //$table->integer('id_hospedagem'); descomentar quando criar o migration de relacionamento
            $table->string('categoria'); //quarto ou leito
            $table->integer('qtd_leitos');
            $table->integer('qtd_leito_ocupado');
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
        Schema::dropIfExists('quartos');
    }
};
