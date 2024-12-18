<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Kho8k\Core\Controllers\Admin\ThemeManagementController;
use Kho8k\Core\Controllers\VastController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::prefix('api')->group(function () {
    Route::post('/upload-vast', [VastController::class, 'uploadVast']);
Route::post('/update-ads', [ThemeManagementController::class, 'updateAds']);
});