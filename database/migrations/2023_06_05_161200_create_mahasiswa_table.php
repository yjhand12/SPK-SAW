<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id()->length(5);
            $table->string('nisn')->unique()->length(50);
            $table->string('nama')->length(50);
            $table->string('tempat_lahir')->length(50);
            $table->string('tanggal_lahir')->length(50);
            $table->string('jenis_kelamin')->length(50);
            $table->string('asal_sekolah')->length(50);
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
        Schema::dropIfExists('mahasiswa');
    }
}
