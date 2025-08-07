<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        return Product::with('warehouses')->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'sku' => 'required|string|unique:products',
            'description' => 'nullable|string',
            'unit_measure' => 'required|string',
            'unit_price' => 'required|numeric',
            'warehouse_id' => 'required|exists:warehouses,id',
            'price_list_id' => 'nullable|json',
        ]);

        $product = Product::create($validated);

        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->update($request->only([
            'name', 'sku', 'description', 'unit_measure', 'unit_price', 'warehouse_id', 'price_list_id'
        ]));

        return response()->json($product);
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
