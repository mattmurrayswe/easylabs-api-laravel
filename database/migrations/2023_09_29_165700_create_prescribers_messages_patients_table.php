<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('prescriber_messages_patient', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prescriber_id');
            $table->string('prescriber_name');
            $table->unsignedBigInteger('patient_id');
            $table->string('patient_name');
            $table->text('message');
            $table->string('document_url')->nullable();
            $table->boolean('is_replying')->default(false); // New column
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prescriber_messages_patient');
    }
};
