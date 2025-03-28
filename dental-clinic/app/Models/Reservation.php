<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use Hasfactory;
    protected $fillable = [
        'user_id',
        'reservation_date',
        'reservation_time',
        'patient_name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
