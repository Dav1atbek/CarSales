<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillsable = [
        'brand',
        'model',
        'body_type_id',
        'photo'

    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function details()
    {
        return $this->hasOne(VehicleDetails::class);
    }

    public function specialOffer()
    {
        return $this->hasOne(SpecialOffers::class);
    }

    public function brand()
    {
        return $this->belongsTo(VehicleBrand::class, 'brand_id');
    }

    public function model()
    {
        return $this->belongsTo(VehicleModel::class, 'model_id');
    }
}
