<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'folio',
        'order',
        'client_number',
        'vendor_number',
        'total_amount',
        'quantity',
        'observations',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'client_number', 'client_number');
    }

    public function vendor()
    {
        return $this->belongsTo(User::class, 'vendor_number', 'vendor_number');
    }

    public function products(): HasMany
    {
        return $this->hasMany(OrderProduct::class);
    }
}
