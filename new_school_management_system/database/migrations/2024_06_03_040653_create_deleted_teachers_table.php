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
        Schema::create('deleted_teachers', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('DOB');
            $table->string('gender');
            $table->string('subject');
            $table->string('NICnumber');
            $table->string('employeeID');
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
        Schema::dropIfExists('deleted_teachers');
    }
};
