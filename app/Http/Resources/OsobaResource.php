<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OsobaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'ID - ' => $this->resource->id,
            'Ime - ' => $this->resource->ime,
            'Prezime - ' => $this->resource->prezime,
            'Tip - ' => $this->resource->tip,
            'Email - ' => $this->resource->email,
            'Broj telefona - ' => $this->resource->broj_telefona,
            'Created at - ' => $this->resource->created_at,
            'Updated at - ' =>  $this->resource->updated_at
        ];
    }
}
