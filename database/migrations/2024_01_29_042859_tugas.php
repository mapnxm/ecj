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
        Schema::create('tugas', function ($table) {
            $table->id();
            $table->string('topic_id');
            $table->string('judul');
            $table->string('dosen');
            $table->string('semester');
            $table->string('topic');
            $table->date('tgl_upload');
            $table->text('isi');
            $table->text('vokab')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas');
    }
};
