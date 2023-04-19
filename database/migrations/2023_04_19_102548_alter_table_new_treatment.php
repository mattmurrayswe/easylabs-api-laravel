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
        Schema::table('new_treatments', function (Blueprint $table) {

            
            $table->time('use_time')->nullable()->comment('Horario do uso');
            $table->string('packing_quantity')->nullable()->comment('Quantidade por embalagem. EX:30 comprimidos / 50ml');
            $table->boolean('permanent')->nullable()->comment('Uso permanente ou nao');

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
