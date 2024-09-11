<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'division_id',
        'name',
        'instagram',
        'linkedin',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
