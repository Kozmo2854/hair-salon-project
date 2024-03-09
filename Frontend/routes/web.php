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

use App\Http\Middleware\PreventUserAccess;
use App\Services\CategoryService;
use App\Services\ProductService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


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
Route::get('/cart', function () {
    return view('user.shop-cart');
});
Route::get('/register', function () {
    return view('user.register');
});

Route::get('/login', function () {
    return view('user.login');
});

Route::get('/forbidden', function () {
    return view('user.forbidden');
});

Route::get('/orders', function () {
    $userId = Session::get('user')['userData']['id'];
    $orders = json_decode(Http::get('http://hairsaloon.api/api/order/user/' . $userId)->body());
    return view('user.orders', [
        'orders' => $orders->data,
    ]);
});

Route::prefix('/admin')->middleware(PreventUserAccess::class)->group(function () {
    Route::get('/home', function () {
        return view('admin/home', [
            'products' => ProductService::getAdminProducts()['data']
        ]);
    });
});
