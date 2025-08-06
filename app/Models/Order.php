<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'folio',
        'total_amount',
        'observations',
        'status',
    ];

    public function products()
    {
        return $this->hasMany(OrderProduct::class);
    }
}
