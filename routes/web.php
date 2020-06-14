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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/privacidad', function () {
    return view('privacidad');
});
Route::get('/jefe', function () {
    return view('jefe');
});
// Route::get('/prueba', function () {
    // return view('prueba');
//});

Route::get('/prevencion', function () {
    return view('prevencion');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout');

Auth::routes();

Route::get('/jefe', 'JefeController@index')->name('jefe');

Route::resource('/tareas', 'tareasController');

Route::resource('/usuarios', 'usuariosController');

Route::get('/imprimir/{id}', 'tareasController@imprimir', function(){
    
});




