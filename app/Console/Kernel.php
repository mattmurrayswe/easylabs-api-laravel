<?php

namespace App\Console;

use App\Models\MedicineReminder;
use App\Models\Patient;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {

            $currentTime = now()->format('H:i');
    
            $medicineReminders = MedicineReminder::whereRaw("TIME_FORMAT(reminder_time, '%H:%i') = ?", [$currentTime])
                ->where('sent', 0)
                ->get();
    
            foreach ($medicineReminders as $medicineReminder) {

                $firebaseToken = Patient::where("id", $medicineReminder->patient_id)->first()->apn_token;
          
                $SERVER_API_KEY = 'AAAAEf8XN00:APA91bE_j0nSHq11TI54Cu13_WROhkU-O9qYrhYzlZ7eGescqM28oVqRKhouZW3ktGbCEhbLhE2RlUecEJH90ExGUGXVBtg2RwwsH7_ebHfJ1mLMEIhSB5JgD33t7k0z5pGaoGw7RZ4o';
                
                $formattedReminderTime = Carbon::createFromFormat('H:i:s', $medicineReminder->reminder_time)->format('H:i');

                $data = [
                    "registration_ids" => [$firebaseToken],
                    "notification" => [
                        "title" => "Lembrete de Medicamento",
                        "body" => "São $formattedReminderTime, não esqueça seu medicamento.",  
                    ],
                    "priority" => "high"
                ];
            
                $headers = [
                    'Authorization' => 'key=' . $SERVER_API_KEY,
                    'Content-Type' => 'application/json',
                ];
            
                $client = new Client();
            
                $response = $client->post('https://fcm.googleapis.com/fcm/send', [
                    'headers' => $headers,
                    'json' => $data,
                    'verify' => false,
                ]);

                $medicineReminder->update(['sent' => 1]);
            }
        })->everyMinute();
    }
    

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
