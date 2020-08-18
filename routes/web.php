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

Route::group(['middleware' => 'tokenevita'], function () {
    Route::get('/auth', 'TokenController@store')->name('auth');
    Route::get('/newtoken', 'TokenController@nuevoToken')->name('mandatoken');
});

Route::post('/valida', 'TokenController@create');

Route::group(['middleware' => 'tokenvalido'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/estado', 'MonitoreoController@store')->name('estado');
    //Ruta para el admnistrador global
    Route::group(['middleware' => 'admin'], function () {
        Route::get('/activity', 'TelegramController@updatedActivity');
        Route::get('/manda', 'TelegramController@enviarMensaje');
        Route::get('/telegram', 'TelegramController@index')->name('telegram');

        //Rutas para crear
        Route::get('/crear','RegistroController@index')->name('crear');
        Route::get('/servidor','ServidorController@index')->name('server');
        Route::get('/asociar','AsociarController@index')->name('asociar');

        //Rutas registro
        Route::post('/registro', 'RegistroController@store')->name('registro');
        Route::post('/registroserver','RegistroController@store')->name('registroserver');
        Route::post('/registroasociar','AsociarController@store')->name('registroasociar');

        //Ruta para ver
        Route::get('/ver','RegistroController@ver')->name('visualizar');
        Route::get('/verserver','ServidorController@ver')->name('visualizarserver');
        Route::get('/verasociar','AsociarController@ver')->name('visualizarasociar');

        //Rutas actualizar
        Route::get('/actualizar','RegistroController@actualizar')->name('actualizar');
        Route::post('/actualziaruser','RegistroController@update')->name('actualizaruser');
        Route::get('/serverup','ServidorController@actualizar')->name('serverup');
        Route::post('/actualziarserver','ServidorController@update')->name('actualizarserver');
        Route::get('/asociarup','AsociarController@actualizar')->name('asociarup');
        Route::post('/actualziarasociar','AsociarController@update')->name('actualizarasociar');

        //Rutas borrar
        Route::post('/eliminar','RegistroController@delete')->name('eliminar');
        Route::post('/serverdel','ServidorController@delete')->name('eliminarservidor');
        Route::post('/delasociar','AsociarController@delete')->name('eliminarasociar');
    });
});
