<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Repositories\UserRepository\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $user;
    public function __construct(UserRepositoryInterface $user){

        $this->user=$user;
    }

    public function store(RegisterRequest $request)
    {

        $response = $this->ifUserExists($request);
        if ($response = 400) {

            ResponseNow('0', 'Account Already exists. Please login', 'null', 400);
        }
    }
}
