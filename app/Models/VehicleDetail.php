<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'make',
        'model',
        'year',
        'license_plate',
        'vehicle_color',
        'vehicle_type',
        'license_front_image',
        'license_back_image',
    ];
}
