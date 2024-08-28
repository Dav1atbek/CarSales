<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description'
    ];

    public function vehicles()
    {
        return $this->belongsToMany(Vehicle::class, 'vehicle_service', 'service_id', 'vehicle_id');
    }
}
