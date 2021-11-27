<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrasporteTipotransportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trasporte__tipotransportes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_transporte');
            $table->unsignedBigInteger('id_tipotransporte');
            $table->foreign('id_transporte')->references('id')->on('transportes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_tipotransporte')->references('id')->on('tipotransportes')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('trasporte__tipotransportes');
    }
}
