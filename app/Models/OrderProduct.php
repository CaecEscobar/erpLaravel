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
        'product_id',
        'quantity',
        'unit_price',
        'discount',
        'discount_amount',
        'subtotal',
        'iva',
        'total',
        'is_active'
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function productDetail(): BelongsTo
    {
        return $this->belongsTo(ProductDetail::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
