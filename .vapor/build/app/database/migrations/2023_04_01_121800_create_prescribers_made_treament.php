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
        Schema::create('prescribers_made_treament', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('prescriber_id')->nullable();
            $table->foreign('prescriber_id')->references('id')->on('prescribers')->onDelete('cascade');

            $table->unsignedBigInteger('treatment_id')->nullable();
            $table->foreign('treatment_id')->references('id')->on('treatments')->onDelete('cascade');;

            $table->string('description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescribers_made_treament');
    }
};
