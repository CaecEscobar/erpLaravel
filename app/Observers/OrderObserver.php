<?php

namespace App\Observers;

use App\Models\Order;
use App\Support\FolioGenerator;

class OrderObserver
{
    public function updating(Order $order): void
    {
        // Dispara sólo cuando cambie 'status' a 'procesado' y aún no exista folio
        if ($order->isDirty('status')
            && strtolower((string) $order->status) === 'procesado'
            && empty($order->folio)) {

            $order->folio = FolioGenerator::make('PRP');
        }
    }

    // (opcional) si también podrías crear el folio cuando se crea con status ya 'procesado'
    public function creating(Order $order): void
    {
        if (strtolower((string) $order->status) === 'procesado' && empty($order->folio)) {
            $order->folio = FolioGenerator::make('PRP');
        }
    }
}