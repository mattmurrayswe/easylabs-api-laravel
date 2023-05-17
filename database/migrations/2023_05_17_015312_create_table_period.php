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
        Schema::create('periods', function (Blueprint $table) {
            $table->id();
            $table->string('period');
        });


        Schema::table('availability', function (Blueprint $table) {
            $table->dropColumn('period');

            $table->unsignedBigInteger('period_id');
            $table->foreign('period_id')->references('id')->on('periods');
        });

        DB::table('periods')->insert([
            [
                'period' => 'Manhã',
            ],
            [
                'period' => 'Tarde',
            ]
        ]);
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periods');
    }
};
