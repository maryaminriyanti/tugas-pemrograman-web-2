<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['name', 'price', 'ram', 'storage', 'release_year'])]
class Smartphone extends Model
{
    /** @use HasFactory<\Database\Factories\SmartphoneFactory> */
    use HasFactory;
}
