<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category' => $this->category->name,
            'description' => $this->description,
            'img' => $this->img,
            'price' => $this->price,
            'offer_price' => $this->offer_price,
            'base_qty' => $this->base_qty,
            'qty' => $this->qty,
        ];
    }
}
