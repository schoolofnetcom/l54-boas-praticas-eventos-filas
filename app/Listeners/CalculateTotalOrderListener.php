<?php

namespace App\Listeners;

use App\Events\OrderCreatedFully;
use App\Events\OrderProductsSaveCompleted;

class CalculateTotalOrderListener
{
    /**
     * Handle the event.
     *
     * @param  OrderProductsSaveCompleted $event
     * @return void
     */
    public function handle(OrderProductsSaveCompleted $event)
    {
        $order = $event->getOrder();
        $sum = 0;
        foreach ($order->products as $orderProduct) {
            $sum += ($orderProduct->price * $orderProduct->quantity);
        }
        $order->total = $sum;
        $order->save();

        event(new OrderCreatedFully($order));
    }
}
