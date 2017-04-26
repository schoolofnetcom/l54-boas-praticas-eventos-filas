<?php

namespace App\Listeners;

use App\Events\OrderCreatedFully;
use App\Payment\PaymentGateway;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DoPaymentListener
{
    /**
     * @var PaymentGateway
     */
    private $paymentGateway;

    /**
     * DoPaymentListener constructor.
     */
    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }


    /**
     * Handle the event.
     *
     * @param  OrderCreatedFully  $event
     * @return void
     */
    public function handle(OrderCreatedFully $event)
    {
        $order = $event->getOrder();
        $this->paymentGateway->payment($order);
    }
}
