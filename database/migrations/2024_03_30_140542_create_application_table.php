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
        Schema::create('application', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('firstname');
            $table->string('lastname');
            $table->date('dob');
            $table->string('gender');
            $table->string('phone');
            $table->string('email');
            $table->string('country');
            $table->string('state');
            $table->string('address');
            $table->string('program_type');
            $table->string('dept');
            $table->string('primaryCertificate');
            $table->string('birthCertificate');
            $table->string('olevelCertificate');
            $table->string('indegineCertificate');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application');
    }
};
