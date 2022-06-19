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
        Schema::create('hospedagems', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('id_quarto');
            $table->string('servicos'); //nao sabia o que colocar como tipo, entao pus string mesmo<---
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
        Schema::dropIfExists('hospedagems');
    }
};
