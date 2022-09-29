<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\AuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'index']);

// Signup routes
Route::post('signup', [AuthenticationController::class, 'signup']);
Route::post('signin', [AuthenticationController::class, 'signin']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('signout', [AuthenticationController::class, 'signout']);
    Route::get('welcome', [IndexController::class, 'greetings']);
});
