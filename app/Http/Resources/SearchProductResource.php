<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SearchProductResource extends JsonResource
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
            'product_store_id'=>$this->id,
            'title'=>$this->products->title,
            'image'=>$this->products->image,
            'unit'=>$this->products->unit,
            'items_per_unit'=>$this->products->items_per_unit,
            'price'=>$this->products->price,
            'min_order'=>$this->products->min_order,
            'discount'=>$this->products->discount,
            'discount_price'=>$this->products->discount_price,
            'stock'=>$this->stock,
            'is_18_plus'=>$this->products->is_18_plus,

        ];
    }
}
