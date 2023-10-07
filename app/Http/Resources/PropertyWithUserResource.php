<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Resources\CityResource;
use App\Http\Resources\ImageResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PropertyWithUserResource extends JsonResource
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
            'address' => $this->address,
            'city' => new CityResource($this->city),
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'price' => $this->price,
            'feature' => json_decode($this->feature),
            'images' => ImageResource::collection($this->images->sortBy('order')),
            'zones' => $this->group_zones(),
            'type' => $this->type,
            'requirements' => json_decode($this->requirements),
            'user' => new UserResource($this->user),
            'is_published' => $this->is_published,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
