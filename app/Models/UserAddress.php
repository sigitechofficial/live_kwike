<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;
    protected $fillable=['user_id','latitude','longitude','address','title','city','flat_no','postal_code'];
    protected $hidden=['created_at','updated_at','deleted_at'];
}
