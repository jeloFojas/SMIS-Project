<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('academic_offerings', function (Blueprint $table) {
            $table->id();

            $table->foreignId('school_id')
                ->constrained('schools')
                ->restrictOnDelete();

            $table->foreignId('academic_year_id')
                ->constrained('academic_years')
                ->restrictOnDelete();

            $table->foreignId('curriculum_id')
                ->constrained('curricula')
                ->restrictOnDelete();

            $table->foreignId('grade_level_id')
                ->constrained('grade_levels')
                ->restrictOnDelete();

            $table->foreignId('track_id')
                ->nullable()
                ->constrained('tracks')
                ->restrictOnDelete();

            $table->foreignId('strand_id')
                ->nullable()
                ->constrained('strands')
                ->restrictOnDelete();

            $table->foreignId('specialization_id')
                ->nullable()
                ->constrained('specializations')
                ->restrictOnDelete();

            $table->string('status', 20)->default('active');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('academic_offerings');
    }
};