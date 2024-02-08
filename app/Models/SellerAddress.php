<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperSellerAddress
 */
class SellerAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_id',
        'latitude',
        'longitude',
        'region',
        'district',
        'street',
        'home',
    ];

    protected $casts = [
        'seller_id' => 'integer',
    ];

    public function seller(): BelongsTo
    {
        return $this->belongsTo(Seller::class);
    }
}
