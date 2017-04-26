<?php

namespace App\Listeners;

use App\Stock\DecrementStocks;
use App\Events\OrderProductCreated;

class DecrementStockFromCheckoutListener
{
    use DecrementStocks;


    /**
     * Handle the event.
     *
     * @param  OrderProductCreated  $event
     * @return void
     */
    public function handle(OrderProductCreated $event)
    {
        $orderProduct = $event->getProduct();
        $this->decrement($orderProduct->product,$orderProduct->quantity);
    }
}
