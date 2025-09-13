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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id()->index();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->morphs('reviewable');
            $table->decimal('rating', 2, 1)->default(5.0); // e.g., 1.0 → 5.0 (supports half-stars)
            $table->text('comment')->default('ok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
