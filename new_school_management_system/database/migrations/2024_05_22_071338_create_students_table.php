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
            $table->unsignedBigInteger('register_id');
            $table->string('fullName');
            $table->date('DOB');
            $table->string('gender');
            $table->string('grade');
            $table->string('studentID')->unique();
            $table->json('activities');
            $table->timestamps();

            $table->foreign('register_id')->references('id')->on('registers')->onDelete('cascade');
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
