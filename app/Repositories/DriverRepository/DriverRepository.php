<?php

namespace App\Repositories\DriverRepository;

use App\Helpers\Helper;
use App\Models\AppSetting;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class DriverRepository implements DriverRepositoryInterface
{
    public function getOrders(){
        $orders = Order::where('driver_id',Auth::id())->with('store')->get();
        return $orders;
    }

    public function orderDetail($request){
        $order_id = $request->id;
        $user = Auth::user();
        $order = Order::where('id',$order_id)->with('store')->with('userAddress')->with('orderItems')->with('orderItems.product')->first();
        
        $origin_lat = $order->store->latitude;
        $origin_long = $order->store->longitude;
        $dist_lat = $order->userAddress->latitude;
        $dist_long = $order->userAddress->longitude;
        
        $order->google = Helper::getGoogleMap($origin_lat, $origin_long, $dist_lat, $dist_long);
        $order->driver_commission = (AppSetting::where('value1','driver_order_commission')->first()->value2 / 100) * $order->total;
        return $order;
    }
    public function order_accept($request){
        $order_id = $request->id;
        $order = Order::find('id',$order_id);
        $order->status = "accepted";
        $order->save();
        return $order;
    }
    public function order_picked($request){
        $order_id = $request->id;
        $order = Order::find($order_id);
        $order->status = "picked";
        $order->save();
        return $order;
    }
    public function order_started($request){
        $order_id = $request->id;
        $order = Order::find($order_id);
        $order->status = "started";
        $order->save();
        return $order;
    }
    public function order_completed($request){
        $order_id = $request->id;
        $order = Order::find($order_id);
        $order->status = "completed";
        $order->save();
        return $order;
    }
    
}
