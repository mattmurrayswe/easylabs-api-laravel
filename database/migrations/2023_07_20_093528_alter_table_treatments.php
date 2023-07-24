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

        Schema::table('treatment_has_medicines', function (Blueprint $table) {

            $table->string('fim_do_uso')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
