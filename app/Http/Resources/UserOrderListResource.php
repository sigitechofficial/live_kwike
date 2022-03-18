<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserOrderListResource extends JsonResource
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
            'order_items'=>$this->orderItems->count(),
            'order_type' => $this->order_type,
            'schedule_date' => $this->schedule_date,
            'status' => $this->status,
            'total' => $this->total,
        ];
    }
}
