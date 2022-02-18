<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'image', 'price', 'unit', 'items_per_unit', 'weight', 'active'];
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'slug' => 'string',
        'description' => 'string',
        'image' => 'string',
        'price' => 'string',
        'discount'=>'string',
        'discount_price'=>'string',
        'unit' => 'string',
        'items_per_unit' => 'integer',
        'weight' => 'float',
        'status' => 'boolean'];


    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
//    public function stores()
//    {
//        return $this->belongsToMany(Store::class);
//    }
    public function productStore(){
        return $this->hasMany(ProductStore::class,'product_id','id');
    }
    public function store(){
        return $this->belongsToMany(Store::class,'product_stores','product_id','store_id','id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class,'product_tags','product_id','tag_id','id');
    }
    public function nutrition(){
        return $this->hasMany(ProductNutrition::class,'product_id','id');
    }
}