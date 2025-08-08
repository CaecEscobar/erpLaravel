<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderProduct extends Model
{
    use HasFactory;

    protected $table = 'order_products';

    protected $fillable = [
        'order_id',
        'product_detail_id',
        'quantity',
        'discount_amount',
        'unit_price',
        'total_price'
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function productDetail(): BelongsTo
    {
        return $this->belongsTo(ProductDetail::class);
    }
}
