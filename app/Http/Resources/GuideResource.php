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
            "id"=> $this->id,
            "name"=> $this->name,
            "username"=> $this->username,
            "cine"=> $this->cine,
            "email"=> $this->email,
            "date_naissance"=>$this->date_naissance,
            "photo"=>$this->photo,
            "sertificat"=>$this->sertificat,
        ];
    }
}
