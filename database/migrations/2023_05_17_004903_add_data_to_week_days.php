<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('week_days')->insert([
            [
                'day' => 'Segunda',
            ],
            [
                'day' => 'Terça',
            ],
            [
                'day' => 'Quarta',
            ],
            [
                'day' => 'Quinta',
            ],
            [
                'day' => 'Sexta',
            ],
            [
                'day' => 'Sábado',
            ],
            [
                'day' => 'Domingo',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('week_days', function (Blueprint $table) {
            //
        });
    }
};
