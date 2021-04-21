<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';
    protected $fillable = ['user_id', 'event_id'];

    public function user() {
        return $this->belongsTo(Auth::user());
    }

    public function event() {
        return $this->belongsTo(Event::class);
    }

}
