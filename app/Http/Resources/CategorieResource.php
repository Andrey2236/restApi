<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategorieResource extends JsonResource
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
            'Categorie' => [
                'name' => $this->name,
                'description' => $this->description,
                'products_count' => $this->count,
            ]
        ];
    }
}
