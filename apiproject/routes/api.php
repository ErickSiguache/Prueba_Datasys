<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\v1\ApiControllers\CalculosController;

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

Route::get('/prueba', [CalculosController::class, 'prueba']);
Route::post('/addition', [CalculosController::class, 'addition']);
Route::post('/subtraction', [CalculosController::class, 'subtraction']);
Route::post('/split', [CalculosController::class, 'split']);
Route::post('/multiplication', [CalculosController::class, 'multiplication']);
