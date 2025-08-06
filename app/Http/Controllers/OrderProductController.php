<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OrderProductController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'unit_measure' => 'required|string',
            'unit_price' => 'required|numeric|min:0',
            'discount' => 'required|integer|min:0|max:100',
        ]);

        $orderProduct = new OrderProduct($request->only([
            'order_id', 'product_id', 'quantity', 'unit_measure', 'unit_price', 'discount'
        ]));

        $orderProduct->calculateTotals(); // usamos el helper que ya creamos
        $orderProduct->save();

        // actualizar total de la orden
        $order = Order::find($orderProduct->order_id);
        $order->total_amount = $order->products()->where('is_active', true)->sum('total');
        $order->save();

        return response()->json(['product' => $orderProduct], 201);
    }

    public function destroy($id)
    {
        $orderProduct = OrderProduct::findOrFail($id);
        $orderProduct->is_active = false;
        $orderProduct->save();

        // Recalcular total de la orden
        $order = Order::find($orderProduct->order_id);
        $order->total_amount = $order->products()->where('is_active', true)->sum('total');
        $order->save();

        return response()->json(['message' => 'Product marked as inactive']);
    }
}
