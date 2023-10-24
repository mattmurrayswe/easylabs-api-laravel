<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('prescribers', function (Blueprint $table) {

            $table->string('ok_crm_frente')->default("")->change();
            $table->string('ok_crm_verso')->default("")->change();
            $table->string('ok_selfie_com_doc')->default("")->change();

        });
    }

    public function down()
    {
    }
};
