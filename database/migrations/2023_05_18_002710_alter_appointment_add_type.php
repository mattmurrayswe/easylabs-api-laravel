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
        Schema::create('clinic_address', function (Blueprint $table) {
            $table->id();
            $table->string('cep');
            $table->string('street');
            $table->string('number');
            $table->string('complement');
            $table->string('neighboor');
            $table->string('city');
            $table->string('state');
        });

        Schema::table('appointments', function (Blueprint $table) {
            $table->string('type');
        });

        Schema::table('prescribers', function (Blueprint $table) {
            $table->boolean('attend_in_person')->nullable();

            $table->unsignedBigInteger('clinic_adress_id')->nullable();
            
            $table->foreign('clinic_adress_id')->references('id')->on('clinic_address');
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
