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
        Schema::table('prescribers', function (Blueprint $table) {

            $table->string('street_number')->nullable();
            $table->string('complement')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('cep')->nullable();
            $table->dropColumn(['address']);

        });
        Schema::table('clinic_address', function (Blueprint $table) {


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
