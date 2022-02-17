<?php

namespace App\Repositories\UserRepository;

use App\Http\Resources\UserResource;
use App\Models\Role;
use App\Models\User;
use App\Repositories\UserRepository\UserRepositoryInterface;
use App\Http\Requests\RegisterRequest;
use App\Traits\CreateStripeCustomerTrait;


class UserRepository implements UserRepositoryInterface{

    use CreateStripeCustomerTrait;

    public function CreateUser($request)
    {
        $user = User::create($request);
        $stripe_customer_id = $this->createStripeCustomer($user);
        $user->update([
            'stripe_customer_id' => $stripe_customer_id
        ]);
        $Role=Role::where('name','Customer')->first();
        $user->roles()->attach($Role);
        $user['token']=$user->createToken('kwikemart')->plainTextToken;
        $user=UserResource::make($user);
        return $user;
    }



}
