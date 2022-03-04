<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductStore extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['product_id','store_id','stock','active'];
    protected $casts = [
        'discount'=>'integer'
    ];
    public function products(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
