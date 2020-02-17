<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
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
                'reviews' => [
                    'id' => $this->reviews->id,
                    [
                        "name" => $this->reviews->user->name,
                        "email" => $this->reviews->user->email,
                    ],
                    'description' => $this->reviews->description,
                    'rating' => $this->reviews->rating,
                ],
            ],

        ];
    }
}
