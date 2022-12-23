<?php

use App\Http\Controllers\Api\ChatController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\ManagerController;
use App\Http\Controllers\Api\MessageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'messages' => MessageController:: class,
    'customer' => CustomerController::class,
    'chat' => ChatController::class,
    'manager' => ManagerController::class,
]);
