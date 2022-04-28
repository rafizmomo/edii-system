<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NEPekerjaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ne_pekerjaan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ne_biodata_id');
            $table->string('nama_perusahaan', 50);
            $table->string('posisi_terakhir', 100);
            $table->decimal('pendapatan_terakhir', 30, 2);
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
        Schema::dropIfExists('ne_pekerjaan');
    }
}
