<?php

namespace App\Events;

use App\Product;

class ProductUpdated
{
    /**
     * @var Product
     */
    private $product;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        //
        $this->product = $product;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }


}
