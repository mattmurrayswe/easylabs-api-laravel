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

            $table->string('ok_crm_frente')->default("false");
            $table->string('ok_crm_verso')->default("false");
            $table->string('ok_selfie_com_doc')->default("false");
            $table->string('ok_foto_perfil')->default("false");
            $table->string('uploaded_crm_frente')->default("false");
            $table->string('uploaded_crm_verso')->default("false");
            $table->string('uploaded_selfie_com_doc')->default("false");
            $table->string('uploaded_foto_perfil')->default("false");

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
