<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('IDproduit')->unsigned();
            $table->foreign('IDproduit')->references('id')->on('produits');

            $table->integer('IDcommande')->unsigned();
            $table->foreign('IDcommande')->references('id')->on('commandes');

            $table->double('quantite');
            $table->double('Spécialite');

            $table->boolean('estAnnule')->default(false);
            $table->boolean('estVendu')->default(false);
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
        Schema::dropIfExists('ventes');
    }
}
