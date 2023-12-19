<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('patient_messages_presc', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->text('message');
            $table->unsignedBigInteger('prescriber_id');
            $table->enum('status', ['read', 'unread'])->default('unread');
            $table->enum('sentby', ['presc', 'patient'])->default('patient');
            $table->timestamps();

            // Foreign keys
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('prescriber_id')->references('id')->on('prescribers');
        });
    }

    public function down()
    {
        Schema::dropIfExists('patient_messages_presc');
    }
};
