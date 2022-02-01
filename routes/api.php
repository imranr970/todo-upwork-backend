<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;

Route::get('/items', [ItemsController::class, 'index']);

Route::prefix('/item')->group(function() {
    Route::post('/store', [ItemsController::class, 'store']);
    Route::put('/edit/{item}', [ItemsController::class, 'update']);
    Route::put('/complete/{item}', [ItemsController::class, 'mark_complete']);
});

Route::put('sort-items', [ItemsController::class, 'sort_items']);