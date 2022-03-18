<?php

namespace App\Http\Resources;

use App\Models\Order;
use Illuminate\Http\Resources\Json\JsonResource;

class RetailerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'token'=>$this->token,
            'pending_orders'=>Order::where(['store_id'=>$this->store_id,'status'=>'pending'])->count(),
            'preparing_orders'=>Order::where(['store_id'=>$this->store_id,'status'=>'preparing'])->count(),
            'dispatched_orders'=>Order::where(['store_id'=>$this->store_id,'status'=>'dispatched'])->count(),
            'cancelled_orders'=>Order::where(['store_id'=>$this->store_id,'status'=>'cancelled'])->count(),
        ];
    }
}
