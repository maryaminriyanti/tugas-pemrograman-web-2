<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


#[Fillable(['name', 'price', 'ram', 'storage', 'release_year', 'brand_id'])]
class Smartphone extends Model
{
    /** @use HasFactory<\Database\Factories\SmartphoneFactory> */
    use HasFactory;

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}
