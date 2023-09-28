<?php

namespace App\Notifications;

use NotificationChannels\Apn\ApnChannel;
use NotificationChannels\Apn\ApnMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;

class MyAPNSNotification extends Notification
{
    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }

    public function via($notifiable)
    {
        return ['apn'];
    }

    public function toApn($notifiable)
    {
        Log::info('toApn method called'); // or dd('toApn method called');

        return ApnMessage::create()
            ->badge(1)
            ->sound('default')
            ->title('My Notification Title')
            ->body('This is the notification message.');
    }
}

