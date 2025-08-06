<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['user_id', 'location_id', 'name', 'max_discount', 'price_list_id'];

    protected $casts = [
        'price_list_id' => 'array',
        'max_discount' => 'decimal:2',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
