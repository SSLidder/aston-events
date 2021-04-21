<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table='events';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function bookings()
    {
        return $this->hasMany('App\Models\Booking', 'event_id');
    }
}
