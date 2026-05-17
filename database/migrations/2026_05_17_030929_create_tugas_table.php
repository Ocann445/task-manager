<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tugas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proyek_id')->constrained('proyeks')->onDelete('cascade');
            $table->foreignId('dibuat_oleh')->constrained('users')->onDelete('cascade');
            $table->foreignId('ditugaskan_ke')->constrained('users')->onDelete('cascade');
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->enum('prioritas', ['rendah', 'sedang', 'tinggi'])->default('sedang');
            $table->enum('status', ['belum_mulai', 'sedang_berjalan', 'selesai'])->default('belum_mulai');
            $table->date('deadline');
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tugas');
    }
};