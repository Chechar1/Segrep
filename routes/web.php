<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Ruta hacial el bot de telegram
Route::get('/activity', 'TelegramController@updatedActivity');

//Ruta para mandar mensajes al bot
Route::get('/manda', 'TelegramController@enviarMensaje');
