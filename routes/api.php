<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\RumahController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserMobileController;
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

Route::post('login','UserController@login');
Route::post('register','UserController@register');
Route::delete('deleteM/{id}', [UserMobileController::class, 'deleteM']);
Route::post('upload', [RumahController::class, 'upload']);
Route::get('statusTersedia', [RumahController::class, 'statusTersedia']);
Route::get('statusTerjual', [RumahController::class, 'statusTerjual']);
Route::post('registerM', [UserMobileController::class, 'registerM']);
Route::post('loginM', [UserMobileController::class, 'loginM']);
Route::post('updateM/{id}', [UserMobileController::class, 'updateM']);
// Route::put('/user_mobiles/{id}/update', [UserMobileController::class, 'update']);

Route::middleware(['auth:api'])->group(function () {
    Route::get('user','UserController@index');
    Route::post('logout','UserController@logout');
});