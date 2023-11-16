<?php

namespace App\Http\Controllers;

use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\Patient;
use App\Notifications\MyAPNSNotification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;

class NotificationsController extends Controller
{
    public function testNotification()
    {
        try {
            $user = Patient::find(12);
            Log::info('APN Configuration:', [
                'environment' => config('services.apn.environment'),
                'certificate' => config('services.apn.certificate'),
                'passphrase' => config('services.apn.passphrase'),
                'key_id' => config('services.apn.key_id'),
                'team_id' => config('services.apn.team_id'),
            ]);
    
            Notification::send($user, new MyAPNSNotification());

            return response()->json(new SuccessResource("Notification sent!"), 200);
        } catch (\Throwable $th) {

             return response()->json(["message" => $th->getMessage()], 500);
        }
    }
}
