<?php

namespace App\Stock;


use App\Product;

trait DecrementStocks
{
    public function decrement(Product $product, $quantity){
        $product->stock = $product->stock - $quantity;
        $product->save();
    }
}