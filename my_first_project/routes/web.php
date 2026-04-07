<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');

});

/*Route::get('/products', function () {
    $products = [
        ['id' => 1, 'name' => 'Laptop', 'price' => 10.00],
        ['id' => 2, 'name' => 'Printer', 'price' => 20.00],
        ['id' => 3, 'name' => 'Monitor', 'price' => 30.00],
    ];
    return view('product.allproduct', compact('products'));
});

Route::get('/product/create', function () {
    return view('product.create');
});

Route::post('/product/store', function () {

    $name = request('name');
    $price = request('price');

    return "Added Product: $name - $price";
});
*/
use App\Http\Controllers\PostController;

Route::resource('posts', PostController::class);

