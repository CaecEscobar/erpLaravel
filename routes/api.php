<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ProductController,
    WarehouseController,
    ClientController,
    LocationController,
    UserProfileController,
    RoleController,
    OrderController,
    OrderProductController,
    ProductImportController,
    OrderExportController,
    ReportImportController,
    ReportController,
    ClientImportController,
    UserController
};

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user()->load('role');
});

// Route::middleware('auth:sanctum')->group(function () {

    Route::get('/users', [UserController::class, 'index']); // GET /api/users
    Route::get('/users/{id}', [UserController::class, 'show']);
    Route::put('/users/{id}', [UserController::class, 'update']);
    Route::apiResource('products', ProductController::class);
    Route::get('/products/price-list/{id}', [ProductController::class, 'showByPriceList']);
    Route::apiResource('warehouses', WarehouseController::class);
    Route::apiResource('clients', ClientController::class);
    Route::get('/clients/number/{client_number}', [ClientController::class, 'showByNumber']);
    Route::apiResource('locations', LocationController::class);
    Route::apiResource('user-profiles', UserProfileController::class)->only(['store', 'update']);
    Route::apiResource('roles', RoleController::class)->only(['index', 'store', 'destroy']);
    Route::apiResource('orders', OrderController::class);

    Route::prefix('order-products')->group(function () {
        Route::post('/', [OrderProductController::class, 'store']);
        Route::delete('{id}', [OrderProductController::class, 'destroy']);
    });

    Route::post('/importar-productos', [ProductImportController::class, 'import']);
    Route::get('/export-order/{id}', [OrderExportController::class, 'export']);
    Route::post('/import-reports', [ReportImportController::class, 'import']);
    Route::middleware('auth:sanctum')->get('/reports/dashboard', [ReportController::class, 'dashboard']);
    Route::post('/importar-clientes', [ClientImportController::class, 'import']);
// });