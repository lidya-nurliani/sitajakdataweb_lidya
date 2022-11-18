<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerbaruanplatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perbaruanplat', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('dafken_id')->unsigned();
            $table->string('pergantian_plat');
            $table->string('masa_berganti');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('dafken_id')->references('id')->on('dafken')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perbaruanplat');
    }
}
