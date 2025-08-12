<?php

namespace App\Http\Controllers\Pdf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Mail\OrderPdfMail;
use App\Models\CompanyInfo;
use App\Models\Order;
use App\Services\Orders\OrderPdfMapper;
use Illuminate\Support\Facades\Mail;

class OrderPdfController extends Controller
{
    public function show(Request $request, string $orderId)
    {
        // 1) Obtener y mapear tus datos a la estructura $data esperada por la vista
        // Aquí asumo que ya tienes un servicio que arma el arreglo $data.
        $data = app('App\\Services\\Orders\\OrderPdfMapper')->make($orderId);

        // 2) Seleccionar vista según necesites (con o sin bloques)
        $view = ($data['usaBloques'] ?? false)
            ? 'pdf.orders-footer'
            : 'pdf.orders';

        // 3) Renderizar PDF
        $pdf = Pdf::loadView($view, compact('data'))
            ->setPaper('letter'); // o A4

        $filename = 'presupuesto-'.$data['folio'] . '.pdf';
        return $pdf->stream($filename); // ->download($filename)
    }

    public function emailToTarget(Request $request, string $orderId)
    {
        $validated = $request->validate([
            'target' => 'required|in:client,vendor,company',
            'cc'     => 'sometimes|array',
            'cc.*'   => 'email',
        ]);

        $order = Order::with(['client','vendor'])->findOrFail($orderId);

        $to = match ($validated['target']) {
            'client'  => $order->client?->email ?? null,
            'vendor'  => $order->vendor?->email ?? null,
            'company' => CompanyInfo::current()?->email ?? null,
        };

        if (!$to) {
            return response()->json([
                'ok' => false,
                'message' => 'No hay correo configurado para '.$validated['target'],
            ], 422);
        }

        $data = app(OrderPdfMapper::class)->make($orderId);
        $view = ($data['usaBloques'] ?? false) ? 'pdf.orders-footer' : 'pdf.orders';

        $pdf      = Pdf::loadView($view, compact('data'))->setPaper('letter');
        $filename = 'presupuesto-'.$data['folio'].'.pdf';

        Mail::to($to)
            ->cc($validated['cc'] ?? [])
            ->send(new OrderPdfMail($data, $pdf->output(), $filename));

        return response()->json(['ok' => true, 'message' => 'Correo enviado a '.$validated['target']]);
    }
}