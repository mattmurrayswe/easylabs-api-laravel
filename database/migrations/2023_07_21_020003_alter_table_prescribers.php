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
        Schema::table('prescribers', function (Blueprint $table) {

            $table->string('motivo_crm_frente')->nullable();
            $table->string('motivo_crm_verso')->nullable();
            $table->string('motivo_selfie_com_doc')->nullable();
            $table->string('motivo_foto_perfil')->nullable();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
