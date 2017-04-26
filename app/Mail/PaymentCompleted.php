<?php

namespace App\Mail;

use App\Order;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentCompleted extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var Order
     */
    public $order;
    /**
     * @var User
     */
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order, User $user)
    {
        //
        $this->order = $order;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Seu pagamento foi aceito')
            ->markdown('emails.payment.completed');
    }
}
