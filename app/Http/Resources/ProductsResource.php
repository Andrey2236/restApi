<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;



class ProductsResource extends JsonResource
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
            'products' => 'products',
            'data' => [
                'name' => $this->name,
                'short_description' => $this->short_description,
                'price' => $this->price,
                'category' => [
                    'id' => $this->categorie->id,
                    'name' => $this->categorie->name,
                    'description' => $this->categorie->description,
                ],
            ],
    ];
    }
}
