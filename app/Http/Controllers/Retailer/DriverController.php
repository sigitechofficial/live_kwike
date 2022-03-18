<?php

namespace App\Http\Controllers\Retailer;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Store;
use App\Models\User;
use App\Models\UserStore;
use App\Repositories\UserRepository\UserRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    public $driver;

    public function __construct(UserRepositoryInterface $driver)
    {
        $this->driver = $driver;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->driver->getDriversByUser(Auth::user());
        // dd($data == null);
        return view('retailer.pages.drivers.index')->with('drivers',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('retailer.pages.drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);
   
        if($validator->fails()){
            $messages = $validator->messages()->all();
            return redirect()->back()->with('messages',$messages);
        }
        else{
            $user_id = Auth::user()->id;
            $store = User::where('id',$user_id)->has('store')->with('store')->first()->store->first();

            $driver = $this->driver->CreateUser($request);
            $role_id = Role::where('name','Driver')->first()->id;
            $role_assigned = $this->driver->assignRole($driver->id,$role_id);
            $driver_assigned = $this->driver->assignDriverToStore($driver->id,$store->id);

            return redirect()->back()->with('info',"Driver Added Successfully");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
