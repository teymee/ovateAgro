<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderedProduct extends Model
{
    public function Orders(){
        return $this->belongsTo(Order::class, 'order_id');
    }
}
