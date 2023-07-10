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
        Schema::dropIfExists('treatments_ref');
        Schema::create('treatments_ref', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('patient_id')->nullable();
            
            $table->unsignedBigInteger('prescriber_id')->nullable();

            $table->unsignedBigInteger('diagnoses_id')->nullable();

            $table->timestamps();
        });

        Schema::dropIfExists('treatment_has_medicines');
        Schema::create('treatment_has_medicines', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('treatment_id')->nullable();
            
            $table->unsignedBigInteger('medicine_id')->nullable();

            $table->integer('intervalo_em_horas')->nullable();

            $table->string('inicio_do_uso')->nullable();

            $table->unsignedBigInteger('how_many')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treatments_ref');
        Schema::dropIfExists('treatment_has_medicines');
    }
};
