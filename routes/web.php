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


Route::get('/home', 'HomeController@count');


Route::get('/capteurs-inactifs', 'capteursInactifsController@detail');

//Route::get('/mesures', 'capteursInactifsController@detail');


Route::post('/chart', function() {
    return view('charts');
});
Route::get('/chart',  function() {
    return view('charts');
});
