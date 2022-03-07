<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\UserRole;
use App\Models\VehicleDetail;
use App\Models\VehicleType;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function show_driver_signup_form(){
        $vehicle_types = VehicleType::all();
        return view('website.auth.signup')->with('vehicle_types',$vehicle_types);
    }
    public function driver_signup(Request $request){
        $validator = Validator::make($request->all(), [
            'first_name'=> 'required',
            'last_name'=> 'required',
            'email'=> 'required|email|unique:users',
            'phone'=> 'required|unique:users',
            'password'=> 'required',
            'license_no'=> 'required',
            'license_front_image'=> 'required',
            'license_back_image'=> 'required',
            'address'=> 'required',
            'building'=> 'required',
            'postal_code'=> 'required',
            'city'=> 'required',
            'make'=> 'required',
            'model'=> 'required',
            'year'=> 'required',
            'license_plate'=> 'required',
            'vehicle_color'=> 'required',
            'vehicle_type'=> 'required',
        ]);
        
        if($validator->fails()){
            return redirect()->back()->with("error",implode("<br>",$validator->messages()->all()));
        }

        $destinationPath = 'public/signupimage';

        $data = $request->except('_token');

        $license_front_image = $request->file('license_front_image');
        $license_front_image_name = "license_front_image-".time().".".$license_front_image->getClientOriginalExtension();
        $license_front_image->move($destinationPath,$license_front_image_name);
        
        $license_back_image = $request->file('license_back_image');
        $license_back_image_name = "license_back_image-".time().".".$license_back_image->getClientOriginalExtension();
        $license_back_image->move($destinationPath,$license_back_image_name);

        $data['license_front_image'] = $license_front_image_name;
        $data['license_back_image'] = $license_back_image_name;

        // create driver
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);

        // assign role
        $role = Role::where('name','Driver')->first();
        $user_role = UserRole::create([
            'user_id' => $user->id,
            'role_id' => $role->id,
        ]);

        // add address
        $address = UserAddress::create([
            'user_id' => $user->id,
            'title' => 'home',
            'address' => $data['address'],
            'flat_no' => $data['building'],
            'postal_code' => $data['postal_code'],
            'city' => $data['city'],
        ]);

        // vehicle detail
        $vehicle_detail = VehicleDetail::create([
            'user_id' => $user->id,
            'make' => $data['make'],
            'model' => $data['model'],
            'year' => $data['year'],
            'license_plate' => $data['license_plate'],
            'vehicle_color' => $data['vehicle_color'],
            'vehicle_type' => $data['vehicle_type'],
            'license_front_image' => $data['license_front_image'],
            'license_back_image' => $data['license_back_image']
        ]);

        return redirect()->back()->with("info","Application Sent for Approval.");
    }
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
