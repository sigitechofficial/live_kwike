<?php

namespace App\Http\Controllers\Retailer;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Repositories\UserRepository\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public $driver;

    public function __construct(UserRepositoryInterface $driver)
    {
        $this->driver = $driver;
    }
    public function assignDriver(Request $request){
        $order = Order::find($request->order_id);
        $order->driver_id = $request->driver_id;

        $body = "You have an Order";
        $title = "New Order";
        $device_token = User::find($request->driver_id)->device_token;

        $notification = json_decode(Helper::notification($body,$title,$device_token), true);
        
        $order->save();
        return response()->json("Driver Assigned",200);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::where('id',Auth::id())->with('store')->first();
        $orders = Order::where('store_id',$user->store->first()->id)->get();
        $drivers = $this->driver->getDriversByUser(Auth::user());
        return view('retailer.pages.orders.index')->with('orders',$orders)->with('drivers',$drivers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $order = Order::find($id)->with('orderItems')->with('orderItems.productStore')->with('orderItems.productStore.products')->first();
        return view('retailer.pages.orders.show')->with('order',$order);
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
