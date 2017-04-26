<?php

namespace App\Listeners;

use App\Events\PaymentCompleted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailPaymentCompleted
{

    /**
     * Handle the event.
     *
     * @param  PaymentCompleted  $event
     * @return void
     */
    public function handle(PaymentCompleted $event)
    {
        $order = $event->getOrder();
        \Mail::to($order->user)->queue(new \App\Mail\PaymentCompleted($order,$order->user));
    }
}
