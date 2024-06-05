<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CirquitResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=> $this->id,
            "photos"=>$this->photos,
            "nom"=>$this->nom,
            "guide_id"=>$this->guide_id,
            "distination_id"=>$this->distination_id

        ];
    }
}
