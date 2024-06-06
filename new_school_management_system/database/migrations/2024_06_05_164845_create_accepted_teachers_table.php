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
        Schema::create('accepted_teachers', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->date('DOB');
            $table->string('gender');
            $table->string('subject');
            $table->string('NICnumber')->unique();
            $table->string('employeeID')->unique();
            $table->string('experience');
            $table->string('qualifications');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accepted_teachers');
    }
};
