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
        Schema::create('accepted_admins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('register_id');
            $table->string('fullName');
            $table->date('DOB');
            $table->string('gender');
            $table->string('NICnumber')->unique();
            $table->string('employeeID')->unique();
            $table->string('experience');
            $table->string('qualifications');
            $table->string('status')->default('accepted');
            $table->timestamps();

            $table->foreign('register_id')->references('id')->on('registers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accepted_admins');
    }
};
