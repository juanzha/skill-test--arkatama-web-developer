<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;
    protected $fillable = ['booking_code', 'name', 'age', 'city', 'travel_id'];

    public function travel()
    {
        return $this->belongsTo(Travel::class);
    }
}
