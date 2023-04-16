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
        Schema::create('follow_up', function (Blueprint $table) {

            $table->id();

            $table->integer('are_you_following')->nullable();
            $table->integer('positive_results')->nullable();
            $table->integer('how_are_you_feeling')->nullable();
            $table->integer('send_to_doctor')->nullable();
            $table->integer('how_is_your_treatment')->nullable();

            $table->unsignedBigInteger('patient_id')->nullable();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('follow_up');
    }
};
