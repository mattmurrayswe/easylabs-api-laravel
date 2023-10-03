<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->unsignedBigInteger('prescriber_id')->nullable();
            $table->boolean('push_enabled');
            $table->boolean('email_enabled');
            $table->timestamps();

            // Add foreign key constraints
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('prescriber_id')->references('id')->on('prescribers')->onDelete('cascade');

            // Make the combination of patient_id and prescriber_id unique
            $table->unique('patient_id');
            $table->unique('prescriber_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('configs');
    }
};
