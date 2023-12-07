<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('availability', function (Blueprint $table) {
            $table->string('consulta_duracao_min')->default(50);
        });
    }

    public function down()
    {
        Schema::dropIfExists('availability');
    }
};
