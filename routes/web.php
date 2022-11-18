<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;

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
    return view('home');
});

Route::get('/sellers', [SellerController::class, 'index']);
Route::post('/sellers', [SellerController::class, 'store']);
Route::get('/sellers/create', [SellerController::class, 'create']);

Route::get('/edit-seller/{sellers}',[SellerController::class, 'edit']);
Route::put('/edit-seller/{sellers}',[SellerController::class, 'update']);
Route::get('/delete-seller/{sellers}',[SellerController::class, 'delete']);
Route::delete('/confirmdelete-seller/{sellers}',[SellerController::class, 'destroy']);
