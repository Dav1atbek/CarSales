<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'color',
        'price',
        'price_max',
        'price_min',
        'transmisson',
        'odometer',
        'description'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
