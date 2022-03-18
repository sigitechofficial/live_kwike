<?php

namespace App\Repositories\AuthRepository;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\DriverLoginRequest;

interface AuthRepositoryInterface{

    public function ifUserExists(UserLoginRequest $request);
    public function ifDriverExists(DriverLoginRequest $request);
    public function ifRetailerExists(DriverLoginRequest $request);
    public function changePassword($request);
    public function resetPassword($request);
    public function logout();


}
