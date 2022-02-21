<?php

namespace App\Repositories\UserRepository;

use App\Http\Requests\RegisterRequest;

interface UserRepositoryInterface{

    public function CreateUser($request);
}
