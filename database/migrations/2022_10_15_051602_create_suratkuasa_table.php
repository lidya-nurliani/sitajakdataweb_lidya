<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratkuasaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratkuasa', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('dafken_id')->unsigned();
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
        Schema::dropIfExists('suratkuasa');
    }
}
