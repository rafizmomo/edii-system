<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NEBiodataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ne_biodata', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('posisi', 50)->nullable();
            $table->string('nama', 50)->nullable();
            $table->string('no_ktp', 16)->nullable();
            $table->string('tempat_lahir', 50)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jenis_kelamin', ['l', 'p'])->nullable();
            $table->string('agama', 15)->nullable();
            $table->string('golongan_darah', 2)->nullable();
            $table->string('status', 15)->nullable();
            $table->text('alamat_ktp')->nullable();
            $table->text('alamat_tinggal')->nullable();
            $table->string('email')->nullable();
            $table->string('no_telp', 15)->nullable();
            $table->string('kontak_darurat')->nullable();
            $table->text('keahlian')->nullable();
            $table->enum('persetujuan_penempatan', ['y', 'n'])->nullable();
            $table->decimal('harapan_gaji', 30, 2)->nullable();
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
        Schema::dropIfExists('ne_biodata');
    }
}
