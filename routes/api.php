<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('order',OrderController::class);
Route::resource('item',OrderController::class);
Route::post('fetch',[OrderController::class,'fetch']);
Route::post('fetchitems',[ItemController::class,'fetch']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
