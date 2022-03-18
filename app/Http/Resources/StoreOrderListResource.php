<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreOrderListResource extends JsonResource
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
            'id'=>$this->id,
            'order_no' => $this->order_no,
            'user' => $this->user->first_name.' '.$this->user->last_name,
            'order_items'=>$this->orderItems->count(),
            'order_type' => $this->order_type,
            'schedule_date' => $this->schedule_date,
            'status' => $this->status,
        ];
    }
}
