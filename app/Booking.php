<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // If we add a different table name
    // protected $table = 'my_bookings';

    // If we use a different primary key name than id
    // protected $primaryKey = 'cin';

    // If the primary key idn't autoincrementing
    // public $incrementing = false; 

    // If we don't use timestamps
    // public $timestamps = false; 

    protected $guarded = [];

    /**
     * Get the user that owns the Booking.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
