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
        Schema::create('week_days', function (Blueprint $table) {
            $table->id();
            $table->string('day');
        });

        Schema::create('availability', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prescriber_id');
            $table->unsignedBigInteger('day_id');
            $table->time('start_time');
            $table->time('end_time');

            $table->foreign('prescriber_id')->references('id')->on('prescribers');
            $table->foreign('day_id')->references('id')->on('week_days');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('availability');
    }
};
