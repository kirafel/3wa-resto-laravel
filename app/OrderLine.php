<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{
    /**
     * Get the Orders for the orderLine.
     */
    public function order()
    {
        return $this->belongsTo('App\Order');
    }

     /**
     * Get the Meals for the orderLine.
     */
    public function meal()
    {
        return $this->belongsTo('App\Meal');
    }
}
