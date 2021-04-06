<?php


namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class SuppliesResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'purchase_date' => $this->purchase_date
        ];
    }
}
