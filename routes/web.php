<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/cors-check', function () {
    return response()->json(['message' => 'CORS OK']);
});

require __DIR__.'/auth.php';
