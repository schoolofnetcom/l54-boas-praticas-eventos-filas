<?php

namespace App\Events;

use App\Order;

class PaymentCompleted
{
    /**
     * @var Order
     */
    private $order;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        //
        $this->order = $order;
    }

    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }


}
