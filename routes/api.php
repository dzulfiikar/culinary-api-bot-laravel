<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BotController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('auth/login', [AuthenticationController::class, 'login']);

    Route::get('telegram', [BotController::class, 'show']);
    Route::post('telegram/start', [BotController::class, 'start']);
})->middleware(\Spatie\HttpLogger\Middlewares\HttpLogger::class);

Route::post('telegram/webhook', [BotController::class, 'handleWebhook']);
