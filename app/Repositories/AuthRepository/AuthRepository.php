<?php

namespace App\Repositories\AuthRepository;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\DriverLoginRequest;
use App\Http\Resources\RetailerResource;
use App\Http\Resources\UserResource;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Symfony\Component\String\u;

class AuthRepository implements AuthRepositoryInterface{

    public function ifUserExists(UserLoginRequest $request){
        if($request->has('phone')){
            $user= User::Where("phone", $request->phone)->first();
            if(!$user){
                errorResponse('0','User Not Found.!',['User Does Not Exist. Please Sign up'],200);
            }
            $user->device_token=$request->device_token;
            $user->time_zone=$request->time_zone;
            $user->save();
            $user['token']=$user->createToken('kwikemart')->plainTextToken;
            $user=UserResource::make($user);
            return $user;
        }
    }
    public function ifDriverExists(DriverLoginRequest $request){
        if($request->has('phone')){
            $user= User::Where("phone", $request->phone)->first();
            if(!$user || !$user->hasRole('Driver')){
                errorResponse('0','User Not Found.!',['User Does Not Exist. Please Sign up'],200);
            }
            if(Hash::check($request->password,$user->password)){
                $user->device_token=$request->device_token;
                $user->time_zone=$request->time_zone;
                $user->save();
                $user['token']=$user->createToken('kwikemart')->plainTextToken;
                $user->profile_image = $request->getHttpHost()."/signupimage/".$user->profile_image;
                $user=UserResource::make($user);
                return $user;
            }
            else{
                errorResponse('0','Password Mismatched',['Password Mismatched'],200);
            }
        }
    }
    public function ifRetailerExists(DriverLoginRequest $request){
        if($request->has('phone')){
            $user= User::Where("phone", $request->phone)->first();
            if(!$user || !$user->hasRole('Retailer')){
                errorResponse('0','User Not Found.!',['User Does Not Exist. Please Sign up'],200);
            }
            if(Hash::check($request->password,$user->password)){
                $user->device_token=$request->device_token;
                $user->time_zone=$request->time_zone;
                $user->save();
                $user['token']=$user->createToken('kwikemart')->plainTextToken;
                $user->store_id=$user->store()->first()->id;
                $user=RetailerResource::make($user);
                return $user;
            }
            else{
                errorResponse('0','Password Mismatched',['Password Mismatched'],200);
            }
        }
    }

    public function changePassword($request){
        $user_id = Auth::id();
        $user = User::find($user_id);
        $db_password = $user->password;
        $new_password = $request->new_password;
        $old_password = $request->old_password;
        if(Hash::check($old_password, $db_password)){
            $user->update([
                'password' => Hash::make($new_password)
            ]);
            $user->save();
            return "Password Updated";
        }
        else{
            return "Old Password Mismatched";
        }
    }

    public function resetPassword($request){
        $user = User::where('phone',$request->phone)->first();
        $user->update([
            'password' => Hash::make($request->password)
        ]);
        $user->save();
        return 'Password Changed.';
    }

    public function logout(){
        Auth::user()->tokens()->delete();
        return "Logout Successfull";
    }
}
