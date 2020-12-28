<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     /**
     * Get the user that owns the Order.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the orderLine that owns the Order.
     */
    public function orderLines()
    {
        return $this->hasMany('App\OrderLine');
    }  
}
