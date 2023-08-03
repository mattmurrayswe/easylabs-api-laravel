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

            $table->dropColumn(['cnpj', 'company_name']);

        });
        Schema::table('clinic_address', function (Blueprint $table) {

            $table->string('company_name')->nullable();
            $table->string('cnpj')->nullable();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
