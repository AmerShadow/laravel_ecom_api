<?php

namespace App\Http\Resources\Product;

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
            'name' => $this->name,
            'description' => $this->desciption,
            'Mrp' => $this->price,
            'discount' => $this->discount,
            'discounted_price' => round((1-$this->discount/100)*$this->price,2),
            'stock' => $this->stock>0?$this->stock:"out of stock",
            'rating'=>$this->review->count()==0?'no rating yet':round($this->review->sum('star')/$this->review->count(),2),
            'links' =>[
                'reviews' => route('reviews.index',$this->id)
            ],
        ];
    }
}
