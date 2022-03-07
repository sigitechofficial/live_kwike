<?php

namespace App\Repositories\UserRepository;

use App\Http\Requests\RegisterRequest;

interface UserRepositoryInterface{

    public function CreateUser($request);
    public function assignRole($user, $role);
    public function updateUser($request);
    public function getDrivers();
    public function getDriversByUser($user);
    public function assignDriverToStore($driver,$store);
    public function userAddress();
    public function addAddress($request);
    public function removeAddress($request);
}
