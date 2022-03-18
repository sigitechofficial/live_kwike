<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartProductsResource extends JsonResource
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
           'product_store_id'=>$this->product_store_id,
           'quantity'=>$this->quantity,
           'price'=>$this->price,
           'is_deleted'=>$this->is_deleted,
           'is_quantity_changed'=>$this->is_quantity_changed,
           'is_price_changed'=>$this->is_price_changed,
       ];
    }
}
