<?php

use App\Http\Controllers\BatikController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [App\Http\Controllers\UserController::class, 'store']);

// Route::prefix('v1')->group(function() {
//     Route::post('/register', [UserController::class], 'store');
// });

Route::post('/login', [App\Http\Controllers\UserController::class, 'login']);
Route::get('/test', [UserController::class, 'index']);


// batik api
Route::get('/batik', [BatikController::class, 'index']);
Route::post('/batik', [BatikController::class, 'store']);
Route::get('/batik/{id}', [BatikController::class, 'show']);
Route::delete('/batik/{id}', [BatikController::class, 'destroy']);
Route::put('/batik/{id}', [BatikController::class, 'edit']);