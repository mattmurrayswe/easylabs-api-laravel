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
        Schema::create('pacients_has_treatments', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');

            $table->unsignedBigInteger('treatment_id')->nullable();
            $table->foreign('treatment_id')->references('id')->on('treatments')->onDelete('cascade');

            $table->string('description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacients_has_treatments');
    }
};
