<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hasiltgs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('akun_id');
            $table->unsignedBigInteger('tugas_id');
            $table->string('nama');
            $table->integer('nim');
            $table->string('jurusan');
            $table->string('dokumen');
            $table->string('audio');
            $table->string('semester');
            $table->string('topic');
            $table->string('tgl_pengumpulan');
            $table->boolean('is_delete')->default(false);
            // $table->string('status')->default('submitted');
            $table->string('nilai')->nullable()->default('0');
            $table->timestamps();

            $table->foreign('tugas_id')->references('id')->on('tugas');
            $table->foreign('akun_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasiltgs');
    }
};
