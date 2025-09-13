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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id()->index();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('lesson_type')->default('video'); // video, pdf, quiz, assignment
            $table->string('video_url')->nullable();
            $table->string('file_url')->nullable();
            $table->integer('duration')->nullable(); // in minutes
            $table->integer('order')->default(0); // lesson sequence
            $table->foreignId('module_id')->constrained('modules')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_lessons');
    }
};
