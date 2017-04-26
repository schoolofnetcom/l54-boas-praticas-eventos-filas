<?php

namespace App\Listeners;

use App\Events\ProductUpdated;
use App\Mail\StockGreatherMax;
use App\Product;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CheckStockMaxListener
{
    /**
     * Handle the event.
     *
     * @param  ProductUpdated  $event
     * @return void
     */
    public function handle(ProductUpdated $event)
    {
        $product = $event->getProduct();
        if ($product->stock >= $product->stock_max) {
            \Mail::to(env('MAIL_STOCK'))->send(new StockGreatherMax($product));
        }

        /* ProductUpdating
         $product = $event->getProduct();
        $productOld = Product::find($product->id);
        if ($product->stock > $productOld->stock &&
            $product->stock >= $product->stock_max
        ) {
            \Mail::to(env('MAIL_STOCK'))->send(new StockGreatherMax($product));
        }*/
    }
}
