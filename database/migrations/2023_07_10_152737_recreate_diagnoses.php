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
        Schema::dropIfExists('diagnoses');
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->id();
            
            $table->string('name')->nullable();

            $table->timestamps();
        });

        Schema::dropIfExists('diagnoses_has_symptoms');
        Schema::create('diagnoses_has_symptoms', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('diagnose_id')->nullable();
            
            $table->unsignedBigInteger('symptom_id')->nullable();

            $table->timestamps();
        });

        Schema::dropIfExists('diagnoses_has_suggested_medicines');
        Schema::create('diagnoses_has_suggested_medicines', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('diagnose_id')->nullable();
            
            $table->unsignedBigInteger('medicine_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnoses');
        Schema::dropIfExists('diagnoses_has_symptoms');
        Schema::dropIfExists('diagnoses_has_suggested_medicines');
    }
};
