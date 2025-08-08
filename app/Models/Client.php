<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

    protected $fillable = ['name', 'client_number', 'vendor_number', 'location_id', 'max_discount', 'price_list_id'];

    protected $casts = [
        'price_list_id' => 'array',
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function vendor()
    {
        return $this->belongsTo(User::class, 'vendor_number', 'vendor_number');
    }

}
