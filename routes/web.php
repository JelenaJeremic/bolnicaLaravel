<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\OdeljenjaController@all');
Route::get('/{odeljenje}', 'App\Http\Controllers\OdeljenjaController@view');
Route::get('/{odeljenje}/{lekar}', 'App\Http\Controllers\LekariController@view');
Route::post('/zakazi', 'App\Http\Controllers\ZakazivanjeController@create');
