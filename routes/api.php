<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ClientController;

Route::get('/ping', fn () => response()->json(['status' => 'ok']));

// API v1
Route::prefix('v1')->group(function () {
    Route::apiResource('clients', ClientController::class);
});
