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
        Schema::table('patient_inform_treatments', function (Blueprint $table) {
            $table->date('use_date')->nullable()->comment('Data do uso');
            $table->time('use_time')->nullable()->comment('Horario do uso');
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
