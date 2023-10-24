<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\ProvinceResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'provinces' => ProvinceResource::collection($this->provinces),
        ];
    }
}
