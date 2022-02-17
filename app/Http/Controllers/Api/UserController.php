<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Repositories\UserRepository\UserRepositoryInterface;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public $user;
    public function __construct(UserRepositoryInterface $user){

        $this->user=$user;
    }

    public function store(RegisterRequest $request){

        $data=$this->user->CreateUser($request->all());
        ResponseNow('1','Account Created Successfully.',$data,200);
    }

}
