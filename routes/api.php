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
    OrderProductController
};

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('products', ProductController::class);
    Route::apiResource('warehouses', WarehouseController::class);
    Route::apiResource('clients', ClientController::class);
    Route::apiResource('locations', LocationController::class);
    Route::apiResource('user-profiles', UserProfileController::class)->only(['store', 'update']);
    Route::apiResource('roles', RoleController::class)->only(['index', 'store', 'destroy']);
    Route::apiResource('orders', OrderController::class);

    Route::prefix('order-products')->group(function () {
        Route::post('/', [OrderProductController::class, 'store']);
        Route::delete('{id}', [OrderProductController::class, 'destroy']);
    });
// });