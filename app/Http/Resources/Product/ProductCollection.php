<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'Mrp' => $this->price,
            'rating'=>$this->review->count()==0?'no rating yet':round($this->review->sum('star')/$this->review->count(),2),
            'href' =>[
                'link' => route('products.show',$this->id),
            ]
        ];
    }
}
