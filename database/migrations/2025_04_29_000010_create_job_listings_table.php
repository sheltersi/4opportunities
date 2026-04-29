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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('employment_type', 50)->nullable();
            $table->string('location_type', 50)->nullable();
            $table->string('location')->nullable();
            $table->string('salary_range', 100)->nullable();
            $table->timestamp('deadline')->nullable();
            $table->boolean('is_active')->default(true);

            // Polymorphic poster relationship
            $table->string('poster_type');
            $table->unsignedBigInteger('poster_id');
            $table->index(['poster_type', 'poster_id']);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};
