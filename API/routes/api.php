<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\UsersController;
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
Route::get('/admin/product',[ProductController::class,'getProductsForAdminPanel']);

Route::post('/category', [CategoriesController::class, 'store']);
Route::get('/category', [CategoriesController::class, 'index']);
Route::get('/category/{id}', [CategoriesController::class, 'show']);
Route::patch('/category/{id}', [CategoriesController::class, 'update']);
Route::delete('/category/{id}', [CategoriesController::class, 'destroy']);

Route::post('/reservation', [ReservationsController::class, 'store']);
Route::get('/reservation', [ReservationsController::class, 'index']);
Route::get('/reservation/{reservation}', [ReservationsController::class, 'show']);
Route::patch('/reservation/{reservation}', [ReservationsController::class, 'update']);
Route::delete('/reservation/{reservation}', [ReservationsController::class, 'destroy']);

Route::post('/user', [UsersController::class, 'store']);
Route::get('/user', [UsersController::class, 'index']);
Route::get('/user/{user}', [UsersController::class, 'show']);
Route::patch('/user/{user}', [UsersController::class, 'update']);
Route::delete('/user/{user}', [UsersController::class, 'destroy']);
Route::get('/verifyUser', [UsersController::class, 'verifyUser']);

Route::post('/order', [OrdersController::class, 'store']);
Route::get('/order', [OrdersController::class, 'index']);
Route::get('/order/{order}', [OrdersController::class, 'show']);
Route::patch('/order/{order}', [OrdersController::class, 'update']);
Route::delete('/order/{order}', [OrdersController::class, 'destroy']);
Route::get('/order/user/{userId}', [OrdersController::class, 'getOrdersByUserId']);

Route::post('/role', [RolesController::class, 'store']);
Route::get('/role', [RolesController::class, 'index']);
Route::get('/role/{role}', [RolesController::class, 'show']);
Route::patch('/role/{role}', [RolesController::class, 'update']);
Route::delete('/role/{role}', [RolesController::class, 'destroy']);

Route::get('/login',[LoginController::class,'authenticate']);
