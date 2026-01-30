<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'license_plate',
        'make',
        'model',
        'price',
        'mileage',
        'seats',
        'doors',
        'production_year',
        'weight',
        'color',
        'image',
        'sold_at',
        'views',
    ];

    public function tags(): HasMany
    {
        return $this->hasMany(Tag::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
