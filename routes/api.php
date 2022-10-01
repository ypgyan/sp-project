<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Lists\ListsController;
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

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('signout', [AuthenticationController::class, 'signout']);
    Route::get('welcome', [IndexController::class, 'greetings']);

    Route::prefix('lists')->group(function () {
        Route::controller(ListsController::class)->group(function () {
           Route::get('/', 'index');
           Route::get('/{list_id}', 'show');
           Route::post('/', 'store');
           Route::put('/{list_id}', 'update');
           Route::delete('/{list_id}', 'destroy');
        });
    });
});
