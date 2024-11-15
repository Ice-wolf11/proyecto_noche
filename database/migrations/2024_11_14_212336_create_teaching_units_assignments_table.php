<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teaching_units_assignments', function (Blueprint $table) {
            $table->id();
            $table->integer('teacher_id')->nullable();
            $table->foreignId('teaching_unit_id')->nullable()->constrained('teaching_units');
            $table->integer('period_id')->nullable();
            $table->integer('shift_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teaching_units_assignments');
    }
};
