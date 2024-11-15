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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('dni', 8);
            $table->string('email', 100);
            $table->string('phone', 15);
            $table->string('enrollment_code', 10)->nullable();
            $table->string('gender', 10);
            $table->string('district', 100);
            $table->string('photo', 255)->nullable();
            $table->integer('user_id')->unsigned()->nullable();//clave foranea tabla usuarios
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
