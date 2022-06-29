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
        Schema::table('quartos', function(Blueprint $table){
            $table->foreignId('hospedagems_id')->constrained('hospedagems');
        });

        Schema::table('compras', function(Blueprint $table){
            $table->foreignId('usuarios_id')->constrained('usuarios');
            $table->foreignId('quartos_id')->constrained('quartos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quartos', function(Blueprint $table){
            $table->dropConstrainedForeignId('hospedagems_id');
        });

        Schema::table('compras', function(Blueprint $table){
            $table->dropConstrainedForeignId('usuarios_id');
            $table->dropConstrainedForeignId('quartos_id');
        });
    }
};
