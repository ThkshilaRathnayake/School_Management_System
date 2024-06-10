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
        Schema::create('students_for_courses', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('studentID');
            $table->string('grade');
            $table->string('courseID');
            $table->string('courseName');
            $table->string('courseCode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students_for_courses');
    }
};
