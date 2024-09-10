<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'thumbnail',
        'title',
        'slug',
        'description',
        'start_date',
        'end_date',
        'status',
    ];
}
