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

// Route::get('/', function () {
//     return view('welcome');
// });

// TUGAS MVC LARAVEL - SANBERKODE
// Route::get('/', 'HomeController@index');
// Route::get('/form', 'AuthController@form');
// Route::post('/congrats', 'AuthController@congrats');
// Route::get('/congrats', 'HomeController@index');

Route::get('/master', function () {
    return view('adminlte.master');
});

Route::get('/', function () {
    return view('adminlte.task');
});

Route::get('/data-tables', function () {
    return view('adminlte.data-tables');
});