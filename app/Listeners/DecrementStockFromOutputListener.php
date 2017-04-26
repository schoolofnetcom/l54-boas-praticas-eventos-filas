<?php

namespace App\Listeners;

use App\Stock\DecrementStocks;
use App\Events\StockOutputCreated;


class DecrementStockFromOutputListener
{
    use DecrementStocks;

    /**
     * Handle the event.
     *
     * @param  StockOutputCreated $event
     * @return void
     */
    public function handle(StockOutputCreated $event)
    {
        //decrementar o estoque do produto
        $output = $event->getOutput();
        $product = $output->product;
        $this->decrement($product, $output->quantity);
    }
}
