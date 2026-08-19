<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();

            $table->foreignId('academic_offering_id')
                ->constrained('academic_offerings')
                ->restrictOnDelete();

            $table->string('code', 30);
            $table->string('name', 100);
            $table->string('status', 20)->default('active');

            $table->timestamps();

            $table->unique(['academic_offering_id', 'code']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};