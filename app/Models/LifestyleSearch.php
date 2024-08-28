<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LifestyleSearch extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'lifestyle_type'
    ];

    public function vehicles()
    {
        return $this->belongsToMany(Vehicle::class, 'lifestyle_vehicle', 'lifestyle_search_id', 'vehicle_id');
    }
}
