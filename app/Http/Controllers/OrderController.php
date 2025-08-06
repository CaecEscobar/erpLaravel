<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function index()
    {
        return Order::with('products')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'observations' => 'nullable|string',
        ]);

        $order = Order::create([
            'folio' => 'ORD-' . strtoupper(Str::random(8)),
            'total_amount' => 0, // se actualizará al final
            'observations' => $request->observations,
            'status' => 'saved',
        ]);

        return response()->json(['order' => $order], 201);
    }

    public function show($id)
    {
        return Order::with('products')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $order->update($request->only(['observations', 'status']));

        return response()->json(['order' => $order]);
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return response()->json(['message' => 'Order deleted']);
    }
}
