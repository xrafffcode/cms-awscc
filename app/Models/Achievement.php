<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Achievement extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'division_id',
        'thumbnail',
        'title',
        'organizer',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
