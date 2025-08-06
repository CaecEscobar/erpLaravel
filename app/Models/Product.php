<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'sku',
        'description',
        'unit_measure',
        'unit_price',
        'warehouse_id',
        'is_active',
        'price_list_id',
    ];

    protected $casts = [
        'price_list_id' => 'array',
        'is_active' => 'boolean',
    ];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function warehouses()
    {
        return $this->belongsToMany(Warehouse::class)
                    ->withPivot('quantity')
                    ->withTimestamps();
    }
}
