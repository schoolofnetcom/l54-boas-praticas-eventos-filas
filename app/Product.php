<?php

namespace App;

use App\Events\ProductUpdated;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $events = [
        'updated' => ProductUpdated::class
    ];
}
