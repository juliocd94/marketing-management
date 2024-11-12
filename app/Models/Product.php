<?php

namespace App\Models;

use App\Enums\VehicleType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static create(array $array)
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_id',
        'product_name',
        'brand',
        'vehicle_type',
        'part_type_id',
        'year',
        'price',
        'stock_quantity',
        'description',
    ];

    protected $casts = [
        'vehicle_type' => VehicleType::class,
    ];

    public function seller(): BelongsTo
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function partType(): BelongsTo
    {
        return $this->belongsTo(PartType::class);
    }
}
