<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'driver' => $this->driver ? new UserResource($this->driver):null,
            'total' => $this->total,
            'tax_price' => $this->tax_price,
            'tax' => $this->tax,
            'deilviry_price' => $this->deilviry_price,
            'final_total' => $this->final_total,
            'status' => $this->status,
            'order_products' => OrderProductResource::collection($this->orderProducts),
        ];
    }
}
