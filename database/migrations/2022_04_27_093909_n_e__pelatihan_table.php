<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NEPelatihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ne_pelatihan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ne_biodata_id');
            $table->string('nama_kursus');
            $table->string('sertifikat', 1)->nullable();
            $table->year('tahun');
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
        Schema::dropIfExists('ne_pelatihan');
    }
}
