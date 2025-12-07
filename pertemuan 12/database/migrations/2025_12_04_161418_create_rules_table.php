<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->constrained()->onDelete('cascade');
            $table->foreignId('major_id')->constrained()->onDelete('cascade');
            $table->integer('min_value')->default(2);
            $table->integer('weight')->default(1);
            $table->timestamps();
            
            $table->unique(['question_id', 'major_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rules');
    }
};