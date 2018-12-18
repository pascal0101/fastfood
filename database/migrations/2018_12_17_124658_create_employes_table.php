<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->increments('id');
            $table->String('Nom');
            $table->String('Prenom');
            $table->Integer('motsdepasse');
            $table->boolean('estActif')->default(false);
            $table->boolean('estConecte')->default(false);

            $table->integer('IDtypeEmploye')->unsigned();
            $table->foreign('IDtypeEmploye')->references('id')->on('TypeEmploye');
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
        Schema::dropIfExists('employes');
    }
}
