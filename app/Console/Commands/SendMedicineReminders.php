<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\MedicineReminder;

class SendMedicineReminders extends Command
{
    protected $signature = 'send:medicine-reminders';

    protected $description = 'Send medicine reminders';

    public function handle()
    {
        $currentTime = now()->format('H:i');

        $medicineReminders = MedicineReminder::whereRaw("TIME_FORMAT(reminder_time, '%H:%i') = ?", [$currentTime])->get();

        foreach ($medicineReminders as $medicineReminder) {
//ok

            $this->info("Sending reminder for MedicineReminder ID: $medicineReminder->id");
        }

        $this->info('Medicine reminders sent successfully.');
    }
}