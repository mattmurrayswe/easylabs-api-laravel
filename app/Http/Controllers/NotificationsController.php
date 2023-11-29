<?php

namespace App\Http\Controllers;

use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\Patient;
use GGInnovative\Larafirebase\Facades\Larafirebase;

class NotificationsController extends Controller
{
    public function testNotification()
    {
        // try {
        //     $user = Patient::find(12);
    
        //     Notification::send($user, new MyAPNSNotification());

        //     return response()->json(new SuccessResource("Notification sent!"), 200);
        // } catch (\Throwable $th) {

        //      return response()->json(["message" => $th->getMessage()], 500);
        // }
        try{
            $user = Patient::find(12);
    
            //Notification::send(null,new SendPushNotification($request->title,$request->message,$fcmTokens));
    
            /* or */
    
            //auth()->user()->notify(new SendPushNotification($title,$message,$fcmTokens));
    
            /* or */
    
            return Larafirebase::withTitle('Hello World')
            ->withBody('I have something new to share with you!')
            ->withAdditionalData([
                'name' => 'wrench',
                'mass' => '1.3kg',
                'count' => '3'
            ])
            ->withToken($user->apn_key) // You can use also withTopic
            ->sendNotification();
            
            return response()->json(new SuccessResource("Notification sent!"), 200);

    
        }catch(\Throwable $th){

            return response()->json(["message" => $th->getMessage()], 500);
        }
    }
}
