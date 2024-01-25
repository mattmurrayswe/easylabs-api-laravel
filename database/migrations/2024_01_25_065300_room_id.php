<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->uuid('room_id')->nullable()->default(null)->after('prescriber_id');
        });
    }

    public function down()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn('room_id');
        });
    }
};
