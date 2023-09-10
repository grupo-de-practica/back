<?php

namespace App\Models;

use App\Http\Resources\ZoneResource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Collection as SupportCollection;

class Property extends Model
{
    use HasFactory;

    /**
    * Get the user that owns the property.
    */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
    * Get the images of the property.
    */
    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    /**
    * Get the zones of the property.
    */
    public function zones(): HasMany
    {
        return $this->hasMany(Zone::class);
    }
    
    /**
    * Get the feature that owns the property.
    */
    public function feature(): BelongsTo
    {
        return $this->belongsTo(PropertyFeature::class, 'feature_id');
    }

    /**
    * Get the zones grouped by type.
    */
    public function group_zones(): SupportCollection
    {
        $zoneResources = ZoneResource::collection($this->zones);
        return $zoneResources->sortBy('order')->groupBy('type.name');
    }
}
