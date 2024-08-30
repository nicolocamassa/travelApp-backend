<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'travel_id',
        'destination_name',
        'description',
        'vist_date',
        'image_url',
        'food',
        'notes',
        'latitude',
        'longitude'
    ];

    public function travel()
    {
        return $this->belongsTo(Travel::class);
    }
}
