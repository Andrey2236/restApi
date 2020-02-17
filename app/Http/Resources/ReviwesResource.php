<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviwesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {

        return ['reviews' => [
            'id' => $this->id,
            [
                "name" => $this->user->name,
                "email" => $this->user->email,
            ],
            'description' => $this->description,
            'rating' => $this->rating,
        ],
        ];
    }
}
