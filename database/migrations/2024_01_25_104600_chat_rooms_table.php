<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('chat_rooms', function (Blueprint $table) {
            $table->uuid('room_id')->nullable()->default(null);
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->unsignedBigInteger('prescriber_id');
            $table->foreign('prescriber_id')->references('id')->on('prescribers');
        });
    }

    public function down()
    {
        Schema::dropIfExists('chat_rooms');
    }
};
