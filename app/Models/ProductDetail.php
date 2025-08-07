<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $table = 'products_details';
    
    protected $fillable = [
        'sku',
        'description',
        'unit_measure',
        'unit_multiplier',
        'unit_price',
        'product_id',
        'price_list_id',
        'is_active',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function priceList()
    {
        return $this->belongsTo(PriceList::class);
    }
}
