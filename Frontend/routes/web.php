<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Services\CategoryService;
use App\Services\ProductService;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('user.index');
});

Route::get('/shop', function () {
    $productData = ProductService::getProducts();
    return view('user.shop', [
        'categoriesNames' => CategoryService::getCategories(),
        'products' => $productData['data'],
        'numberOfPages' => $productData['total'] / 9
    ]);
});

Route::prefix('/admin')->group(function () {
    Route::get('/products', function () {
        return view('admin/adminProducts');
    });
});
