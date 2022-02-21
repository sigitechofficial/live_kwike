<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $table=['cart-items'];
    public function productStore(){
        return $this->belongsTo(ProductStore::class,'product_store_id','id');
    }
}
