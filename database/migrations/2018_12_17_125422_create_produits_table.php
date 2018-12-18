<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->increments('id');
            $table->String('libelleProduit');
            $table->double('prixProduit');
            $table->boolean('estActif')->default(false);
            $table->boolean('estDisponible')->default(false);
            $table->integer('IDtypeProduit')->unsigned();
            $table->foreign('IDtypeProduit')->references('id')->on('typeProduit');
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
        Schema::dropIfExists('produits');
    }
}
