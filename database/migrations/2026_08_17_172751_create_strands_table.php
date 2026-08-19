<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('strands', function (Blueprint $table) {
            $table->id();

            $table->foreignId('track_id')
                ->constrained('tracks')
                ->restrictOnDelete();

            $table->string('code', 30);
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->string('status', 20)->default('active');

            $table->timestamps();

            $table->unique(['track_id', 'code']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('strands');
    }
};