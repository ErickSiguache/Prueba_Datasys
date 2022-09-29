<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\v1\AppControllers\CalculosJSController;
use \App\Http\Controllers\v1\AppControllers\CalculosPHPController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [CalculosPHPController::class, 'index'])->name('index');
Route::post('/', [CalculosPHPController::class, 'calculos'])->name('calculos');

Route::get('/calculadora', [CalculosJSController::class, 'index'])->name('index');

