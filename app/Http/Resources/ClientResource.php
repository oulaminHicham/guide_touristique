<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=>$this->id,
            "name"=>$this->name,
            "prenom"=>$this->prenom,
            "username"=>$this->username,
            "email"=>$this->email,
            "date_naissance"=>$this->date_naissance,
            "cine"=>$this->cin,
            "photo"=>$this->photo,
            "password"=>$this->password


        ];
    }
}
