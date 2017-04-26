<?php

namespace App;

use App\Events\OrderProductCreated;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{

    protected $events = [
        'created' => OrderProductCreated::class
    ];

    protected $casts = [
        'price' => 'float',
        'quantity' => 'integer'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
