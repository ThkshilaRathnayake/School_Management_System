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
        Schema::create('deleted_new_students', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->date('DOB');
            $table->string('gender');
            $table->string('grade');
            $table->string('studentID')->unique();
            $table->json('activities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deleted_new_students');
    }
};
