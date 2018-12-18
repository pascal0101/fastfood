<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->increments('id');
             $table->date('dateCommande');
            $table->boolean('estCommande')->default(false);
            $table->boolean('estPres')->default(false);
            $table->boolean('estSupp')->default(false);

            $table->integer('IDemploye')->unsigned();
            $table->foreign('IDemploye')->references('id')->on('employe');

            $table->integer('IDtable')->unsigned();
            $table->foreign('IDtable')->references('id')->on('table');
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
        Schema::dropIfExists('commandes');
    }
}
