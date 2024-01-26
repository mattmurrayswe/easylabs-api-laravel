<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MessagesEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public $isPatientMessaging;
    public $id;
    public $room;

    public function __construct(
        string $message,
        bool $isPatientMessaging,
        int $id,
        string $room
    ) {
        $this->message = $message;
        $this->isPatientMessaging = $isPatientMessaging;
        $this->id = $id;
        $this->room = $room;
    }

    public function broadcastOn()
    {
        return ['chat.' . $this->room];
    }

    public function broadcastAs()
    {
        return 'messages-event';
    }
}
