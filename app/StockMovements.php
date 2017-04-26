<?php

namespace App;

trait StockMovements
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
