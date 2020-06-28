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

Auth::routes(["register" => false]);

Route::get('/auth', 'TokenController@store')->name('auth');
Route::post('/valida', 'TokenController@create');

Route::group(['middleware' => 'tokenvalido'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    //Ruta para el admnistrador global
    Route::group(['middleware' => 'admin'], function () {

        Route::get('/crear','RegistroController@create')->name('crear');
        Route::post('/registro', 'RegistroController@store')->name('registro');
        Route::get('/activity', 'TelegramController@updatedActivity');
        Route::get('/manda', 'TelegramController@enviarMensaje');
        Route::get('/telegram', 'TelegramController@index')->name('telegram');
    });
});
