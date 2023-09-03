<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    * Get the feature that owns the property.
    */
    public function feature(): BelongsTo
    {
        return $this->belongsTo(PropertyFeature::class, 'feature_id');
    }
}
