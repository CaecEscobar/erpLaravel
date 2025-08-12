<?php

namespace App\Support;

use App\Models\Order;

class FolioGenerator
{
    public static function make(string $prefix = 'PRP'): string
    {
        // Hasta 25 intentos para evitar colisiones (muy raro)
        for ($i = 0; $i < 25; $i++) {
            $mid = str_pad((string) random_int(0, 99), 2, '0', STR_PAD_LEFT);
            $end = str_pad((string) random_int(0, 9999), 4, '0', STR_PAD_LEFT);
            $folio = "{$prefix}-{$mid}-{$end}";

            if (! Order::where('folio', $folio)->exists()) {
                return $folio;
            }
        }

        // Fallback extremo (prácticamente nunca se usa)
        $uniq = substr((string) hexdec(substr(uniqid(), -4)), 0, 4);
        return "{$prefix}-99-{$uniq}";
    }
}
