<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Https\Controllers\NEWSAPIController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/create',[NEWSAPIController::class,'create']);
Route::get('/getAll',[NEWSAPIController::class,'getAll']);
Route::get('/getId/{id}',[NEWSAPIController::class,'getId']);
Route::post('/update/{id}',[NEWSAPIController::class,'update']);
Route::post('/delete/{id}',[NEWSAPIController::class,'delete']);
Route::get('/getType/{type}',[NEWSAPIController::class,'getType']);
Route::get('/getDate/{date}',[NEWSAPIController::class,'getDate']);
Route::get('/getTypeDate/{type}/{date}',[NEWSAPIController::class,'getTypeDate']);
