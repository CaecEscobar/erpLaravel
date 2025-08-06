<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'unit_measure',
        'unit_price',
        'discount',
        'subtotal',
        'discount_amount',
        'iva',
        'total',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'discount' => 'integer',
        'unit_price' => 'decimal:2',
        'subtotal' => 'decimal:2',
        'discount_amount' => 'decimal:2',
        'iva' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function calculateTotals(): void
    {
        $this->subtotal = $this->unit_price * $this->quantity;
        $this->discount_amount = $this->subtotal * ($this->discount / 100);
        $base = $this->subtotal - $this->discount_amount;
        $this->iva = round($base * 0.16, 2);
        $this->total = round($base + $this->iva, 2);
    }
}