<?php

namespace App\Payment;


use App\Events\PaymentCompleted;
use App\Order;

class PaymentGateway
{
    public function payment(Order $order){
        \Log::info("Starting payment from Order: {$order->id}");
        sleep(15);
        \Log::info("Payment completed from Order: {$order->id}");
        event(new PaymentCompleted($order));
    }
}