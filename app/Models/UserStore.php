<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStore extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','store_id'];
    protected $table = "user_store";
}
