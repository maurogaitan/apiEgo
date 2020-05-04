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

Route::post('register', 'API\RegisterController@register');
Route::post('login', 'API\RegisterController@login');

Route::apiResource('cars','CarController');

/*Register API: Verb:GET, URL:http://localhost:8000/api/register
Login API: Verb:GET, URL:http://localhost:8000/api/login
Product API: URL:http://127.0.0.1:8000/api/cars
Product Single API: URL:http://127.0.0.1:8000/api/cars/4

*/