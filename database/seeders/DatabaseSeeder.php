<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Set unique room_id for existing patients
        $patients = DB::table('patients')->get();

        foreach ($patients as $patient) {
            DB::table('patients')
                ->where('id', $patient->id)
                ->update(['room_id' => Str::uuid()]);
        }

        // Insert corresponding rows in chat_rooms
        foreach ($patients as $patient) {
            DB::table('chat_rooms')->insert([
                'room_id' => $patient->room_id,
                'patient_id' => $patient->id,
                'prescriber_id' => $patient->prescriber_id ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
