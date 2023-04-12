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
        Schema::create('new_treatments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('patient_id')->nullable();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');

            $table->string('name_diagnosis')->nullable()->comment('Nome do diagnostico');
            $table->string('name_medicine')->nullable()->comment('Nome do medicamento');
            $table->string('name_treatment')->nullable()->comment('Nome do medicamento');

            $table->string('presentation')->nullable()->comment('Apresentacao do remedio: Gotas / comprimidos / caixas');

            $table->string('how_many')->nullable()->comment('Quantos compromitos / dosagem / gotas');
            $table->string('frequency')->nullable()->comment('Remedio deve ser tomado 3x por dia');

            $table->date('start_treatment_date')->comment('Início do tratamento');
            $table->date('end_treatment_date')->comment('Final do tratamento');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_treatments');
    }
};
