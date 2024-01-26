<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('chat_rooms', function (Blueprint $table) {

            $table->unsignedBigInteger('prescriber_id')->nullable()->change();

        });
    }

    public function down()
    {

    }
};
