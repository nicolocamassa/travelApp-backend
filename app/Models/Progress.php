<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

    protected $fillable = [
        'travel_id',
        'destination_id',
        'status'
    ];

    // Definisce la relazione con Travel
    public function travel()
    {
        return $this->belongsTo(Travel::class);
    }

    // Definisce la relazione con Destination
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
