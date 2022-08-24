<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RacunResource extends JsonResource
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
            'Broj racuna - ' => $this->resource->broj_racuna,
            'Tip - ' => $this->resource->tip,
            'Stanje - ' => $this->resource->stanje,
            'Vlasnik - ' => $this->resource->osoba_id,
            'Created at - ' => $this->resource->created_at,
            'Updated at - ' =>  $this->resource->updated_at
        ];
    }
}
