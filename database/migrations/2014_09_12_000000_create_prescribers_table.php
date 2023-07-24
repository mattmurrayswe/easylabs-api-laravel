<?php

use Illuminate\Database\Eloquent\SoftDeletes;
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
        Schema::create('prescribers', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();

            $table->string('password');
            $table->string('cpf')->unique();
            $table->string('cellphone');
            $table->string('crm')->unique();

            $table->boolean('indicate_clinic');
            $table->boolean('active');

            $table->string('cnpj')->unique();
            $table->string('company_name');

            $table->json('address');
            $table->json('documents');

            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescribers');
    }
};
