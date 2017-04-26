<?php

namespace App\Listeners;

use App\Events\StockEntryCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class IncrementStockListener
{
    /**
     * Handle the event.
     *
     * @param  StockEntryCreated  $event
     * @return void
     */
    public function handle(StockEntryCreated $event)
    {
        //incrementa o estoque do produto
        $entry = $event->getEntry();
        $product = $entry->product;
        $product->stock = $product->stock + $entry->quantity;
        $product->save();
    }
}
