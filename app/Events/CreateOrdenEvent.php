<?php

namespace App\Events;

use App\Models\Order;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CreateOrdenEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

   //public Order $newOrder;
    /**
     * Create a new event instance.
     */
    public function __construct(public Order $otherOrder){


        // a $newOrder, le asignamos el objeto que recibe por parametro
        //$this->newOrder=$newOrder;
        //
    }

    /**
     * Get the channels the event should broadcast on.
     *

     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
