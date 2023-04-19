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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//--------------------------------Remintentes--------------------------------

Route::get('/rem',[
    'uses'=>'App\Http\Controllers\ApiController@getRemitentes',
    'as'=>'getRemitentes'
]);

Route::post('/postrem',[
    'uses'=>'App\Http\Controllers\ApiController@postRemitente',
    'as'=>'postRemitente'
]);

Route::post('/uprem',[
    'uses'=>'App\Http\Controllers\ApiController@updateRemitente',
    'as'=>'updateRemitente'
]);

//--------------------------------Mails--------------------------------

Route::get('/mails',[
    'uses'=>'App\Http\Controllers\ApiController@getCorreos',
    'as'=>'getCorreos'
]);

Route::post('/postmail',[
    'uses'=>'App\Http\Controllers\ApiController@postmail',
    'as'=>'postmail'
]);

Route::post('/upmail',[
    'uses'=>'App\Http\Controllers\ApiController@updateEmail',
    'as'=>'updateEmail'
]);

//--------------------------------Adjuntos--------------------------------

Route::get('/att',[
    'uses'=>'App\Http\Controllers\ApiController@getAdjuntos',
    'as'=>'getAdjuntos'
]);

