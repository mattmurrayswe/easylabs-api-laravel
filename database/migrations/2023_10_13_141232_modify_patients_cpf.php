<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->string('cpf', 14)->nullable()->change();
        });

        // Update existing records to apply CPF mask
        DB::table('patients')->whereRaw('LENGTH(cpf) = 11')->update(['cpf' => \DB::raw("CONCAT(SUBSTR(cpf, 1, 3), '.', SUBSTR(cpf, 4, 3), '.', SUBSTR(cpf, 7, 3), '-', SUBSTR(cpf, 10, 2))")]);
    }

    public function down()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->string('cpf')->nullable(false)->change();
        });
    }
};
