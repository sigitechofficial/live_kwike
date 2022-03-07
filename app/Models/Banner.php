<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'valid_till',
    ];
    public static function getBanners(){
       return Banner::where('valid_till', '<=', date('Y-m-d H:i:s'))
            ->Select('title','image')
            ->get();
    }
}
