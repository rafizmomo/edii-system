<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NEPendidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ne_pendidikan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ne_biodata_id');
            $table->string('jenjang_pendidikan_terakhir', 50);
            $table->string('nama_instansi', 100);
            $table->string('jurusan', 50);
            $table->year('tahun_lulus');
            $table->decimal('ipk', 3, 2);
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
        Schema::dropIfExists('ne_pendidikan');
    }
}
