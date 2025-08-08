<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['name'];

    public function details()
    {
        return $this->hasMany(ProductDetail::class);
    }

    public function productDetailsFiltered($priceListId)
    {
        return $this->hasMany(ProductDetail::class)->where('price_list_id', $priceListId);
    }

    public function productDetails()
    {
        return $this->hasMany(ProductDetail::class);
    }
}
