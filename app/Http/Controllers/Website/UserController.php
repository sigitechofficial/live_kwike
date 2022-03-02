<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function create(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'first_name'=> 'required',
            'last_name'=> 'required',
            'email'=> 'required|email|unique:users',
            'phone'=> 'required|unique:users',
            'password'=> 'required',
            'type'=> 'required',
            'about'=> 'required',
            'saloon_name'=> 'required',
            'bio'=> 'required',
            'address'=> 'required',
            'city'=> 'required',
            'zip'=> 'required',
            'cover_img'=>'nullable|image|mimes:jpeg,png,jpg',
            'front_side'=>'nullable|image|mimes:jpeg,png,jpg',
            'back_side'=>'nullable|image|mimes:jpeg,png,jpg',
            
        ]);
        
        if($validator->fails()){
            return redirect()->back()->with("error",implode("<br>",$validator->messages()->all()));
        }
        
        $hashed_password = Hash::make($request->password);
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['password'] = $hashed_password;
        $data['role'] = 'seller';
        $data['device_token'] = '945053742';
        $data['status'] = 'blocked';
        $data['type'] = $request->type;
        $data['about'] = $request->about;
        $data['saloon_name'] = $request->saloon_name;
        $data['bio'] = $request->bio;
        $data['address'] = $request->address;
        $data['city'] = $request->city;
        $data['zip'] = $request->zip;
        
        // dd($request->all());
       
        $destinationPath = 'public/signupimage';
        
    
        
        // cover_img
                if(isset($request->cover_img)){
                    $photo = $request->file('cover_img');
                    $photo_name = "cover_img-".time().".".$photo->getClientOriginalExtension();
                    $photo->move($destinationPath,$photo_name);
                }
                else{
                    $photo_name = " ";
                }
                
        $data['cover_img'] = $photo_name;
        
        
        // front_side
                if(isset($request->front_side)){
                    $photo = $request->file('front_side');
                    $photo_name1 = "front_img-".time().".".$photo->getClientOriginalExtension();
                    $photo->move($destinationPath,$photo_name1);
                }
                else{
                    $photo_name1 = " ";
                }
        $data['front_side'] = $photo_name1;
        
        
        // back_side
                if(isset($request->back_side)){
                    $photo = $request->file('back_side');
                    $photo_name2 = "back_side-".time().".".$photo->getClientOriginalExtension();
                    $photo->move($destinationPath,$photo_name2);
                }
                else{
                    $photo_name2 = " ";
                }
        $data['back_side'] = $photo_name2;
        
        $users = User::create($data);
       
        
        return redirect()->back()->with("message","Sucessfully Created Account !");
    
    }
}
