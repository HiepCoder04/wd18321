<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

