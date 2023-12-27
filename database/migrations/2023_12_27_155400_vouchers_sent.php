<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('vouchers_sent', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('voucher_id');
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('sent_by_prescriber_id');
            $table->timestamps();

            // Foreign keys
            $table->foreign('voucher_id')->references('id')->on('vouchers');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('sent_by_prescriber_id')->references('id')->on('prescribers');
        });
    }

    public function down()
    {
        Schema::dropIfExists('vouchers_sent');
    }
};
