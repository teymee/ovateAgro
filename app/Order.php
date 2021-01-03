<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function Ordered_products(){
        return $this->hasMany(OrderedProduct::class, 'order_id');
    }
}
