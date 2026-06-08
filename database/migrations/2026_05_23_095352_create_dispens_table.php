<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dispens', function (Blueprint $table) {

            $table->id();

            $table->string('nama_siswa');
            $table->string('kelas');
            $table->string('jurusan');
            $table->text('alasan');
            $table->string('tujuan');
            $table->string('jam_keluar');
            $table->string('jam_kembali');
            $table->string('status');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dispens');
    }
};