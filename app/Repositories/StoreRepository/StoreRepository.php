<?php

namespace App\Repositories\StoreRepository;


use App\Http\Resources\StoreOrderDetailResource;
use App\Http\Resources\StoreOrderListResource;
use App\Models\Order;

class StoreRepository implements StoreRepositoryInterface
{
    public function orders($request)
    {

        $store_id=auth()->user()->store()->first()->id;
        $orders=Order::with(['user','orderItems'])->where('store_id',$store_id)->where('status',$request->get('status'))->get();
        $orders=StoreOrderListResource::collection($orders);
        $data=['image_url'=>env('IMAGE_URL'),'orders'=>$orders];
        return $data;
    }
    public function orderDetail($request)
    {
        $order=Order::with('user','userAddress','orderItems.productStore.products')->findOrFail($request->get('id'));
        $order=StoreOrderDetailResource::make($order);
        $data=['image_url'=>env('IMAGE_URL'),'order'=>$order];
        return $data;
    }
}
