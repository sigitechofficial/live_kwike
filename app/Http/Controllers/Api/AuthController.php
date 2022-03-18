<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\DriverLoginRequest;
use App\Http\Requests\DriverResetPasswordRequest;
use App\Repositories\AuthRepository\AuthRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public $auth;

    public function __construct(AuthRepositoryInterface $auth){
        $this->auth=$auth;
    }
    public function login(UserLoginRequest $request){
        $data=$this->auth->ifUserExists($request);

        ResponseNow('1','Account Successfully Log in.',$data,200);
    }
    public function loginDriver(DriverLoginRequest $request){
        $data=$this->auth->ifDriverExists($request);
        ResponseNow('1','Account Successfully Log in.',$data,200);
    }
    public function RetailerLogin(DriverLoginRequest $request){
        $data=$this->auth->ifRetailerExists($request);

        ResponseNow('1','Account Successfully Log in.',$data,200);
    }
    public function changePassword(Request $request){
        $data=$this->auth->changePassword($request);

        ResponseNow('1','Password Changed.',$data,200);
    }
    public function resetPassword(DriverResetPasswordRequest $request){
        $data=$this->auth->resetPassword($request);

        ResponseNow('1','Password Changed.',$data,200);
    }
    public function logout(){
        $data = $this->auth->logout();
        ResponseNow('1','Logout Successfull',$data,200);
    }
}
