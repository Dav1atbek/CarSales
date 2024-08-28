<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialOffers extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'discount',
        'start',
        'end'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
