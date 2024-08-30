<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;

    protected $table = 'travels';
    
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'image_url'
    ];

    public function destinations()
    {
        return $this->hasMany(Destination::class);
    }
}
