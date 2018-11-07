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


Route::get('/home', function () {
    return view('index');
});

Route::get('/mesures', function () {
    return view('mesures');

});

Route::get('/clients', function () {
        return view('clients');

});

Route::get('/capteurs-inactifs', function () {
    return view('capteurs-inactifs');

});

Route::get('/capteurs', function () {
    return view('capteurs');

});