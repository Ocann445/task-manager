<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('proyeks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dibuat_oleh')->constrained('users')->onDelete('cascade');
            $table->string('nama_proyek');
            $table->text('deskripsi')->nullable();
            $table->date('deadline');
            $table->enum('status', ['aktif', 'selesai', 'ditangguhkan'])->default('aktif');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proyeks');
    }
};