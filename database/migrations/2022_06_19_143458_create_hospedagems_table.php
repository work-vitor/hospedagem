<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            //$table->integer('id_quarto'); descomentar quando criar o migration de relacionamento
            $table->string('servicos');
            $table->string('descricao');
            $table->timestamps();
        });

       //CRIAÇÃO ATRIBUTO FOTO COMO LONGBLOB PARA ADICIONAR AS FOTOS (SOU UM GÊNIO)
        DB::statement("ALTER TABLE hospedagems ADD foto LONGBLOB");
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
