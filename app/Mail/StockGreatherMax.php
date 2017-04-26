<?php

namespace App\Mail;

use App\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class StockGreatherMax extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var Product
     */
    public $product;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        //
        $this->product = $product;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Estoque acima do máximo')
            ->markdown('emails.stock.greather-max');
    }
}
