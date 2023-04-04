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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('presentation');
            $table->string('concentration')->nullable();
            $table->string('volume_flask')->nullable();
            $table->string('formulation')->nullable();
            $table->string('lab');
            $table->timestamps();
        });

        // Fake data for medication
        DB::table('medicines')->insert([
            [
                'name' => 'MEdicamento',
                'presentation' => 'gotas',
                'concentration' => '1ml',
                'volume_flask' => '100ml',
                'formulation' => 'Canabidiol',
                'lab' => 'Laboratorio',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
