<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // ✅ Ensure the table name is plural
    protected $table = 'services';

    protected $fillable = [
        'title',
        'description',
        'duration',
        'price',
        'image',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
