<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LifestyleVehicle extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'lifestyle_search_id',
        'vehicle_id'
    ];

    public function lifestyleSearch()
    {
        return $this->belongsTo(LifestyleSearch::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
