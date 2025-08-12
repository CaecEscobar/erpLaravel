<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    // Nombre de la tabla (no plural convencional)
    protected $table = 'company_info';

    protected $fillable = [
        'name',
        'razon_social',
        'rfc',
        'location',
        'email',
        'contact',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // OPCIONAL: guardar el RFC siempre en mayúsculas y sin espacios
    public function setRfcAttribute($value): void
    {
        $this->attributes['rfc'] = strtoupper(trim((string) $value));
    }

    // OPCIONAL: si solo habrá un registro, un helper rápido
    public static function current(): ?self
    {
        return static::query()->first();
    }
}
