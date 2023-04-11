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
        Schema::table('treatments', function (Blueprint $table) {
            $table->integer('timer_per_day')->nullable()->comment('Vezes que o remedio deve ser tomado por dia');
            $table->string('duration')->nullable()->comment('Duracao da receita, Exp: Durante 3 meses');
            $table->string('how_many')->nullable()->comment('Quantos compromitos / dosagem / gotas');
            $table->string('frequency')->nullable()->comment('Remedio deve ser tomado 3x por dia');

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
