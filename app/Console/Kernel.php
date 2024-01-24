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
        $schedule->command('app:send-medicine-reminders')->everyMinute();

        // Reiniciar a marcação de "enviado hoje" para todos os lembretes diariamente
        $schedule->call(function () {
            MedicineReminder::where('sent_today', 1)->update(['sent_today' => 0]);
        })->dailyAt('00:00');

        // Agendar o envio dos lembretes de medicamentos a cada minuto
        $schedule->call(function () {
            $currentTime = now()->format('H:i');

            $medicineReminders = MedicineReminder::whereRaw("TIME_FORMAT(reminder_time, '%H:%i') = ?", [$currentTime])
                ->get();

            foreach ($medicineReminders as $medicineReminder) {
                // Verificar se já foi enviado hoje
                if ($medicineReminder->sent_today) {
                    continue; // Pular para o próximo lembrete
                }

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

                // Marcar como enviado hoje
                $medicineReminder->update(['sent_today' => 1]);
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
