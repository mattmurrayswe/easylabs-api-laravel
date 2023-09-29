<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        // Add apn_token column to the patients table
        Schema::table('patients', function (Blueprint $table) {
            $table->string('apn_token')->nullable();
        });

        // Add apn_token column to the prescribers table
        Schema::table('prescribers', function (Blueprint $table) {
            $table->string('apn_token')->nullable();
        });
    }

    public function down()
    {
        // Remove apn_token column from the patients table
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn('apn_token');
        });

        // Remove apn_token column from the prescribers table
        Schema::table('prescribers', function (Blueprint $table) {
            $table->dropColumn('apn_token');
        });
    }
};
