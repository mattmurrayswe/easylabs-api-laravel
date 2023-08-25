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
        // Find duplicate names and update them
        $duplicates = DB::table('symptoms')
            ->select('id', 'name', DB::raw('ROW_NUMBER() OVER (PARTITION BY name ORDER BY id) as occurrence'))
            ->get();

        foreach ($duplicates as $duplicate) {
            if ($duplicate->occurrence > 1) {
                DB::table('symptoms')
                    ->where('id', $duplicate->id)
                    ->update(['name' => $duplicate->name . ' (Duplicate ' . ($duplicate->occurrence - 1) . ')']);
            }
        }

        Schema::table('symptoms', function (Blueprint $table) {
            $table->unique('name');
        });
    }

    public function down()
    {
        Schema::table('symptoms', function (Blueprint $table) {
            $table->dropUnique('symptoms_name_unique');
        });
    }
};
