<?php

namespace App\Notifications;

use NotificationChannels\Apn\ApnMessage;
use Illuminate\Notifications\Notification;

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
        return ApnMessage::create()
            ->badge(1)
            ->sound('default')
            ->title('My Notification Title')
            ->body('This is the notification message.');
    }
}

