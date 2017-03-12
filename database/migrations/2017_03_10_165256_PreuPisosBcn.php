<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PreuPisosBcn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('preus', function(Blueprint $table) {
            $table->increments("id");
            $table->string("districte");
            $table->string("barri");
            $table->string("titol");
            $table->integer("any");
            $table->integer("semestre");
            $table->float("preu");
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
        //
    }
}
