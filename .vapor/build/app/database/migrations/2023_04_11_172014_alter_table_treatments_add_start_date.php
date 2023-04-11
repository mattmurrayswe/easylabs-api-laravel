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
        Schema::table('pacients_has_treatments', function (Blueprint $table) {
            $table->dateTime('start_treatment_date')->nullable()->comment('Início do tratamento');
            $table->dateTime('end_treatment_date')->nullable()->comment('Final do tratamento');
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
