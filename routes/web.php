<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
// Điều hướng qua artisan của controller
// php artisan make:controller tên Controller
Route::get('list-product', [ProductController::class, 'showProduct']);
//slug
Route::get('get-product/{id}/{name?}', [ProductController::class, 'getProduct']);
//params
Route::get('update-product', [ProductController::class, 'updateProduct']);


