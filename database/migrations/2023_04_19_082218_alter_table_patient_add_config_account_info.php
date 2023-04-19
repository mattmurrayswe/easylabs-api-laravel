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
        Schema::table('patients', function (Blueprint $table) {

            
            $table->boolean('push_notification')->nullable();
            $table->boolean('email_notification')->nullable();
            $table->boolean('remember_medicine')->nullable();
            $table->boolean('treatment_feedback')->nullable();

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
