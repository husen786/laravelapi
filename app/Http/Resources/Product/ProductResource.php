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
            'name'=>$this->name,
            'description'=>$this->details,
            'price'=>$this->price,
            'stock'=>$this->stcok==0?'out of stcok':$this->stcok,
            'discount'=>$this->discount,
            'Totalprice'=>round((1-($this->discount/100))*$this->price,2),
            'rating'=>$this->reviews->count()>0?$this->reviews->sum('star')/$this->reviews->count():'no revies yet',
            'href'=>[
                'reviews'=>route('reviews.index',$this->id)
            ]

        ];
    }
}
