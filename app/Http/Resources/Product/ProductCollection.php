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
            'id'=>$this->id,
             'name'=>$this->name,
            'Totalprice'=>round((1-($this->discount/100))*$this->price,2),
            'rating'=>$this->reviews->count()>0?$this->reviews->sum('star')/$this->reviews->count():'no revies yet',
            'href'=>[
                'link'=>route('products.show',$this->id)
            ]
        ];
    }
}
