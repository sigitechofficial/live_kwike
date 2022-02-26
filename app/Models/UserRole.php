<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD:app/Models/AppSetting.php
class AppSetting extends Model
=======
class UserRole extends Model
>>>>>>> origin/production_nadeem:app/Models/UserRole.php
{
    use HasFactory;
    protected $table = "users_roles";
    protected $fillable = [
        'user_id',
        'role_id'
    ];
}
