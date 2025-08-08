<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductDetail extends Model
{
    use HasFactory;

    protected $table = 'products_details';

    protected $fillable = [
        'sku',
        'product_id',
        'price_list_id',
        'description',
        'unit_measure',
        'unit_multiplier',
        'unit_price',
        'is_active'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
