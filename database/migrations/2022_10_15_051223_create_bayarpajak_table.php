<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBayarpajakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayarpajak', function (Blueprint $table) {
            $table->id();
            $table->string('unit_kerja');
            $table->BigInteger('dafken_id')->unsigned();
            $table->string('pembayaran_pajak');
            $table->date('tgl_bayar');
            $table->string('pemegang');
            $table->string('keterangan');
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
        Schema::dropIfExists('bayarpajak');
    }
}
