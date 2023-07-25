<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil', function (Blueprint $table) {
            $table->id()->length(5);
            $table->foreignId('mahasiswa_id')->length(5)->constrained('mahasiswa')->onDelete('cascade');
            $table->float('nilai')->length(12);
            $table->enum('keputusan', ['DITERIMA', 'TIDAK DITERIMA']);
            $table->string('keterangan')->length(99);
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
        Schema::dropIfExists('hasil');
    }
}
