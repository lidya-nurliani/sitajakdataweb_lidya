<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDafkenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dafken', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemegang');
            $table->string('merk_kendaraan');
            $table->string('jenis_kendaraan');
            $table->string('no_polisi');
            $table->string('no_mesin');
            $table->string('no_rangka');
            $table->string('tahun');
            $table->string('harga_perolehan');
            $table->string('sumber_dana');
            $table->string('keterangan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dafken');
    }
}
