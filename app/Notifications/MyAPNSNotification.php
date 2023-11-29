<?php

namespace App\Notifications;

use NotificationChannels\Apn\ApnMessage;
use Illuminate\Notifications\Notification;

class MyAPNSNotification extends Notification
{
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

