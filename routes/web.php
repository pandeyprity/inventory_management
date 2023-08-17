<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserTypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PurchaseController;

use App\Models\Brand;
use App\Models\Purchase;

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

Route::get('/', function () {
    return view('Auth.login');
});
Route::get('/signup', function () {
    return view('Auth.signup');
});

Route::resource('usertype', UserTypeController::class);
Route::get('usertype/edit/{id}', [UserTypeController::class, 'edit']);
Route::post('usertype/update/{id}', [UserTypeController::class, 'update']);
Route::post('usertype/store', [UserTypeController::class, 'store']);
Route::get('usertype/destroy/{id}', [UserTypeController::class, 'destroy']);

Route::post('user/signupuser', [UserController::class, 'signupuser']);
Route::post('user/login', [UserController::class, 'login']);

Route::get('user/show', [UserController::class,"show"]);
Route::get('user/create', [UserController::class,"create"]);
Route::post('user/store', [UserController::class,"store"]);
Route::get('user/edit/{id}', [UserController::class, 'edit']);
Route::post('user/update/{id}', [UserController::class, 'update']);
Route::get('user/delete/{id}', [UserController::class, 'delete']);

Route::get('brand/show', [BrandController::class,"show"]);
Route::get('brand/create', [BrandController::class,"create"]);
Route::post('brand/store', [BrandController::class,"store"]);
Route::get('brand/edit/{id}', [BrandController::class, 'edit']);
Route::post('brand/update/{id}', [BrandController::class, 'update']);
Route::get('brand/delete/{id}', [BrandController::class, 'delete']);

Route::get('item/show', [ItemController::class,"show"]);
Route::get('item/create', [ItemController::class,"create"]);
Route::post('item/store', [ItemController::class,"store"]);
Route::get('item/edit/{id}', [ItemController::class, 'edit']);
Route::post('item/update/{id}', [ItemController::class, 'update']);
Route::get('item/delete/{id}', [ItemController::class, 'delete']);

Route::post('purchase/store', [PurchaseController::class,"store"]);
Route::get('purchase/show', [PurchaseController::class,"show"]);



