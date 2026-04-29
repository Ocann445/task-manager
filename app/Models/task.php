<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class task extends Model
{
    use HasFactory;
}

Schema::create('tasks', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('description')->nullable();
    $table->date('deadline')->nullable();
    $table->enum('status', ['pending', 'in_progress', 'completed'])->default('pending');
    $table->timestamps();
});