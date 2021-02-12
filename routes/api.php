<?php

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
Route::get('odeljenje', 'App\Http\Controllers\OdeljenjaController@getAll');
Route::get('odeljenje/{id}', 'App\Http\Controllers\OdeljenjaController@getById');
Route::get('lekari', 'App\Http\Controllers\LekariController@getAll');
Route::get('lekari/{id}', 'App\Http\Controllers\LekariController@getById');
Route::get('zakazivanja', 'App\Http\Controllers\ZakazivanjeController@getAll');
Route::get('zakazivanja/{id}', 'App\Http\Controllers\ZakazivanjeController@getById');
Route::post('lekari', 'App\Http\Controllers\LekariController@save');
Route::post('zakazivanja', 'App\Http\Controllers\ZakazivanjeController@save');
Route::delete('lekari/{id}', 'App\Http\Controllers\LekariController@delete');
Route::delete('zakazivanja/{id}', 'App\Http\Controllers\ZakazivanjeController@delete');
