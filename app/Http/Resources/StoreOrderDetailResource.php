<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreOrderDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'order_no' => $this->order_no,
            'voucher_code' => $this->voucher_code,
            'voucher_discount' => $this->voucher_discount,
            'sub_total' => $this->sub_total,
            'total' => $this->total,
            'schedule_date' => $this->schedule_date,
            'call_at_door' => $this->call_at_door,
            'ring_bell' => $this->ring_bell,
            'description' => $this->description,
            'order_type' => $this->order_type,
            'status' => $this->status,
            'is_paid' => $this->is_paid,
            'user' => UserResource::make($this->user),
            'user_address' => UserAddressResource::make($this->userAddress),
            'order_items' => OrderItemsResource::collection($this->orderItems)
        ];
    }
}

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
        ];
    }
}

class UserAddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'title' => $this->title,
            'address' => $this->address,
            'city' => $this->city,
            'flat_no' => $this->flat_no,
            'postal_code' => $this->postal_code,
        ];
    }
}

class OrderItemsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'title' => $this->productStore->products->title,
            'description' => $this->productStore->products->description,
            'image' => $this->productStore->products->image,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'total' => $this->total,

        ];
    }
}
