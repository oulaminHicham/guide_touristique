<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GuideResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            "date_naissance"=>$this->date_naissance,
            "cine"=>$this->cine,
            "sertificat"=>$this->sertificat,
            "accepter"=>$this->accepter
        ];
    }
}
