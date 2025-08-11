<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductWarehouse extends Model
{
    protected $table = 'product_warehouse';

    protected $fillable = [
        'sku',
        'warehouse_id',
        'quantity',
        'is_active',
    ];

    // protected $casts = [
    //     'is_active' => 'boolean',
    //     'quantity'  => 'decimal:2',
    // ];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function detail()
    {
        return $this->hasOne(\App\Models\ProductDetail::class, 'sku', 'sku')
                    ->oldestOfMany(); // primer match por SKU
    }
}