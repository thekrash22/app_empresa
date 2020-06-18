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


Route::resource('companies', 'CompanyAPIController');

Route::resource('employees', 'EmployeeAPIController');
Route::post('verificar_cc','HomeController@consultar_cedula');
Route::post('verificar_nit','HomeController@consultar_nit');
