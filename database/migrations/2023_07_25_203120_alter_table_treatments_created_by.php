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
        Schema::table('treatments_ref', function (Blueprint $table) {
            
            $table->string('created_by')->default("Prescriber");
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
