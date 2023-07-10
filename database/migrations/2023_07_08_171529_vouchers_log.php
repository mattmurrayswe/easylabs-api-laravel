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
        Schema::create('vouchers_log', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prescriber_id');
            $table->unsignedBigInteger('patient_id');
            $table->string('voucher_code');

            $table->foreign('prescriber_id')->references('id')->on('prescribers');
            $table->foreign('patient_id')->references('id')->on('patients');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
