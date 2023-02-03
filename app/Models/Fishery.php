<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fishery extends Model
{
    use HasFactory;

    protected $fillable = [
        'voivodeship',
        'fishery',
        'fish_id',
        'creationdate'
    ];

    public function fish()
    {
        return $this->belongsTo(Fish::class);
    }

}
