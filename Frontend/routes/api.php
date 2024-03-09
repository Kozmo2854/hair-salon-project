<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\SessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('/saveSession', [SessionController::class, 'toggleSession']);
Route::get('/getSession', [SessionController::class, 'getSession']);
Route::post('/createOrder', [OrderController::class, 'createOrder']);
