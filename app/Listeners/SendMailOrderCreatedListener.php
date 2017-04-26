<?php

namespace App\Listeners;

use App\Events\OrderCreatedFully;
use App\Mail\OrderCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailOrderCreatedListener
{
    /**
     * Handle the event.
     *
     * @param  OrderCreatedFully $event
     * @return void
     */
    public function handle(OrderCreatedFully $event)
    {
        $order = $event->getOrder();
        \Mail::to($order->user)->queue(new OrderCreated($order, $order->user));
    }
}
