<?php

namespace App\Http\Controllers\Api\V1\Patient;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class FirebaseController extends Controller
{
    public function testNotification(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "message" => "required|string"
        ]);

        try {
            $firebaseToken = Patient::where("email", $request->email)->first()->apn_token;
          
            $SERVER_API_KEY = 'AAAAEf8XN00:APA91bE_j0nSHq11TI54Cu13_WROhkU-O9qYrhYzlZ7eGescqM28oVqRKhouZW3ktGbCEhbLhE2RlUecEJH90ExGUGXVBtg2RwwsH7_ebHfJ1mLMEIhSB5JgD33t7k0z5pGaoGw7RZ4o';
        
            $data = [
                "registration_ids" => [$firebaseToken],
                "notification" => [
                    "title" => "Mais Alivio",
                    "body" => $request->message,  
                ]
            ];
        
            $headers = [
                'Authorization' => 'key=' . $SERVER_API_KEY,
                'Content-Type' => 'application/json',
            ];
        
            $client = new Client();
        
            $response = $client->post('https://fcm.googleapis.com/fcm/send', [
                'headers' => $headers,
                'json' => $data,
                'verify' => false, // Disable SSL verification (not recommended for production)
            ]);
            
            return response()->json([
                "firebase_response" => json_decode($response->getBody()->getContents())
            ], 200);

        } catch (RequestException $e) {

            return response()->json($e->getMessage(), 500);

        } catch (\Throwable $th) {

            return response()->json($th->getMessage(), 500);

        }
    }
}
