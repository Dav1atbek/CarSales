<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Добавляйте здесь маршруты для вашего API
});
