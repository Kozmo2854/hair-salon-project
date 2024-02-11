<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
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

Route::post('/product', [ProductController::class, 'store']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{product}', [ProductController::class, 'show']);
Route::patch('/product/{product}', [ProductController::class, 'update']);
Route::delete('/product/{product}', [ProductController::class, 'destroy']);

Route::post('/category', [CategoriesController::class, 'store']);
Route::get('/category', [CategoriesController::class, 'index']);
Route::get('/category/{category}', [CategoriesController::class, 'show']);
Route::patch('/category/{category}', [CategoriesController::class, 'update']);
Route::delete('/category/{category}', [CategoriesController::class, 'destroy']);
