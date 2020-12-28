<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    /**
     * Get the orderLine that owns the Meal.
     */
    public function orderLines()
    {
        return $this->hasMany('App\OrderLine');
    }  
}
