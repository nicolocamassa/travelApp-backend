<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'is_completed', 'due_date'];

    protected $casts = [
        'is_completed' => 'boolean',
        'due_date' => 'datetime',
    ];
}
