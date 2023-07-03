<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function (){
    Route::get('tags', [\App\Http\Controllers\Api\V1\TagController::class, 'index']);


    Route::post('login', [\App\Http\Controllers\Api\V1\Auth\LoginController::class, 'login']);
    Route::post('signup', [\App\Http\Controllers\Api\V1\SignupController::class, 'register']);
});
