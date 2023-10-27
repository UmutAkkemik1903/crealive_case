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

Route::group(['middleware' => ['web','throttle:60,1','auth']], function () {
    Route::apiResources([
        'category' => 'App\Http\Controllers\Api\CategoryController',
    ]);
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
});

