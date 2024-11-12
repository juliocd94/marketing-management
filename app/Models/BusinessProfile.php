<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static create(array $array)
 */
class BusinessProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'registration_country',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
