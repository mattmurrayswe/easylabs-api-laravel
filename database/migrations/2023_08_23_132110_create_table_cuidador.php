<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cuidador', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('telefone');
            $table->string('relacao_ou_parentesco');
            // You can add more columns here if needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cuidador');
    }
};
