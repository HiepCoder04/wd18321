<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::get('list-user', [UserController::class, 'showUser']);
//slug
Route::get('get-user/{id}/{name?}', [UserController::class, 'getUser']);
//params
// Route::get('update-product', [ProductController::class, 'updateProduct']);

Route::group(['prefix' => 'users','as' =>'users.'], function(){
   Route::get('/list-users',[UserController::class, 'listUsers'])->name('listUsers');
   Route::get('add-users',[UserController::class, 'addUsers'])->name('addUsers');
   Route::post('add-users',[UserController::class, 'addPostUsers'])->name('addPostUsers');
   Route::get('delete-users/{idUser}',[UserController::class, 'deleteUser'])->name('deleteUser');

});

Route::prefix('product')->group(function(){
    Route::get('/list-product',[ProductController::class,'listProduct'])->name('product.index');
    Route::get('/add-product',[ProductController::class,'addProduct'])->name('product.addProduct');
    Route::post('/post-product',[ProductController::class,'postProduct'])->name('product.postProduct');
    Route::get('/delelte/{id}',[ProductController::class,'deleteProduct'])->name('product.delete');
    Route::get('/edit/{id}',[ProductController::class,'editProduct'])->name('product.edit');
    Route::post('/update/{id}',[ProductController::class,'updateProduct'])->name('product.update');
    Route::post('/timkiem',[ProductController::class,'timkiem'])->name('product.timkiem');

});
Route::get('test',[UserController::class, 'test']);