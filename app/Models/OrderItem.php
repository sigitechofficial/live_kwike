<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
//    protected $table=['order_items'];
    protected $hidden=['created_at','updated_at'];
    public function productStore(){
        return $this->belongsTo(ProductStore::class,'product_store_id','id');
    }
    public function product(){
        return $this->hasOneThrough(Product::class,ProductStore::class,'product_id','id','product_store_id');
    }
}
