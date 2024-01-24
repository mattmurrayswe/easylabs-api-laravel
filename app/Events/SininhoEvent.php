<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SininhoEvent implements ShouldBroadcast
{
  use Dispatchable, InteractsWithSockets, SerializesModels;

  public $sininho;

  public function __construct($sininho)
  {
      $this->sininho = $sininho;
  }

  public function broadcastOn()
  {
      return ['sininho-channel'];
  }

  public function broadcastAs()
  {
      return 'sininho-event';
  }
}