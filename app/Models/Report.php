<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';

    protected $fillable = [
        'vendor_number',
        'zone',
        'quota',
        'orders',
        'invoiced',
        'freights',
        'credit_notes',
        'net_amount',
        'backorder',
        'progress',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'vendor_number', 'vendor_number');
    }
}
