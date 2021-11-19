<?php

use App\Http\Controllers\Auth\ApiAuthController;
use App\Http\Controllers\ProfileController;
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

Route::get('/validate-token', function () {
    return ['data' => 'Token is valid',
'success' => true];
})->middleware('auth:api');

Route::group([], function () {

    Route::post('login',  [ApiAuthController::class, 'login']);
    Route::post('register',  [ApiAuthController::class, 'register']);

});

Route::middleware('auth:api')->group(function () {
    Route::post('/logout', 'Auth\ApiAuthController@logout')->name('logout.api');
    Route::resource('profiles', ProfileController::class);
});
