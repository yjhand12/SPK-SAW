<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id()->length(5);
            $table->foreignId('mahasiswa_id')->length(50)->constrained('mahasiswa')->onDelete('cascade');
            $table->foreignId('kriteria_id')->length(50);
            $table->foreignId('sub_kriteria_id')->length(50);
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
        Schema::dropIfExists('nilai');
    }
}
