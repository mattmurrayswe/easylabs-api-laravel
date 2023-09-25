<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::dropIfExists('vouchers');

        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('engagement_action');
            $table->string('engagement_action_agent');
            $table->text('description')->nullable();
            $table->dateTime('expiration');
            $table->decimal('discount', 10, 2);
            $table->integer('quantity');
            $table->boolean('is_first_box')->default(false);
            $table->boolean('is_active')->default(true);
            $table->integer('uses')->default(0);
            $table->string('cpf')->nullable();
            $table->unsignedBigInteger('prescriber_id')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vouchers');
    }
};
