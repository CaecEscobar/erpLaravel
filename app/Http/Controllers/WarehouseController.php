<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index(Request $r)
    {
    $perPage    = (int) $r->input('per_page', 20);
    $activeOnly = filter_var($r->input('active_only','1'), FILTER_VALIDATE_BOOLEAN);
    $sku        = $r->input('sku');
    $itemsLimit = (int) $r->input('items_limit', 20); // cuántos items por almacén quieres traer

    $itemsFilter = function($q) use ($activeOnly,$sku,$itemsLimit){
        if ($activeOnly) { $q->where('is_active', true); }
        if ($sku)        { $q->where('sku','like',"%{$sku}%"); }
        $q->orderBy('sku')->take($itemsLimit); // <-- limita items por almacén (no pagina, solo recorta)
    };

    return Warehouse::query()
        ->when($activeOnly, fn($q)=>$q->where('is_active', true))
        ->withCount(['items as lines_count' => function($q) use ($activeOnly,$sku){
            if ($activeOnly) { $q->where('is_active', true); }
            if ($sku)        { $q->where('sku','like',"%{$sku}%"); }
        }])
        ->withSum(['items as quantity_sum' => function($q) use ($activeOnly,$sku){
            if ($activeOnly) { $q->where('is_active', true); }
            if ($sku)        { $q->where('sku','like',"%{$sku}%"); }
        }], 'quantity')
        ->with([
            'items' => $itemsFilter,
            'items.detail' => function ($q) {
                $q->select('products_details.id','products_details.sku','products_details.description');
            },
        ])
        ->orderBy('description')
        ->paginate($perPage);
    }

    // public function items(\App\Models\Warehouse $warehouse, Request $r)
    // {
    //     $perPage    = (int) $r->input('per_page', 20);
    //     $activeOnly = filter_var($r->input('active_only','1'), FILTER_VALIDATE_BOOLEAN);
    //     $sku        = $r->input('sku');

    //     $q = $warehouse->items()
    //         ->when($activeOnly, fn($q)=>$q->where('is_active', true))
    //         ->when($sku, fn($q)=>$q->where('sku','like',"%{$sku}%"))
    //         ->with(['detail' => fn($q) => $q->select(
    //             'products_details.id','products_details.sku','products_details.description'
    //         )])
    //         ->orderBy('sku');

    //     return $q->paginate($perPage);
    // }

    public function show(Warehouse $warehouse, Request $r)
    {
        $activeOnly = filter_var($r->input('active_only', '1'), FILTER_VALIDATE_BOOLEAN);
        $sku        = $r->input('sku');

        $warehouse->load([
            'items' => function ($q) use ($activeOnly, $sku) {
                if ($activeOnly) { $q->where('is_active', true); }
                if ($sku)       { $q->where('sku', 'like', "%{$sku}%"); }
                $q->orderBy('sku');
            },
            'items.detail:id,sku,description',
        ]);

        return response()->json([
            'warehouse'     => $warehouse,
            'lines_count'   => $warehouse->items->count(),
            'quantity_sum'  => (float) $warehouse->items->sum('quantity'),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|string',
            'is_active' => 'boolean',
        ]);

        $warehouse = Warehouse::create($validated);
        return response()->json($warehouse, 201);
    }

    public function update(Request $request, $id)
    {
        $warehouse = Warehouse::findOrFail($id);
        $warehouse->update($request->only(['description', 'is_active']));
        return response()->json($warehouse);
    }

    public function destroy($id)
    {
        Warehouse::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
