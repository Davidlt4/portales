<?php

use App\Http\Controllers\RemitenteController;
use App\Http\Controllers\CorreoController;
use App\Http\Controllers\AdjuntoController;
use App\Http\Controllers\ParametroController;
use App\Http\Controllers\EventoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::resource('remitentes',RemitenteController::class)->middleware('auth');
Route::resource('correos',CorreoController::class)->middleware('auth');
Route::resource('adjuntos',AdjuntoController::class)->middleware('auth');
Route::resource('parametros',ParametroController::class)->middleware('auth');

Route::get('/remitentes/{id}/remitentemails','App\Http\Controllers\RemitenteController@mails')->name('remitentemails');

Route::get('/evento/{token}','App\Http\Controllers\EventoController@eventoAbierto')->name('eventoAbierto');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
