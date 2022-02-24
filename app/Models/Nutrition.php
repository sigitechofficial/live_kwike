<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nutrition extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "nutritions";
    protected $fillable = [
        'typical_values'
    ];
}
