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
    return view('sales.index');
});
Route::get('/about', function () {
    return view('sales.about');
});
//Route::get('/docentes', function () {
//    return view('docentes.index');
//});
//Route::get('/docentes/create', function () {
  //  return view('docentes.create');
//});

Route::post('/docentes/create', 'DocentesController@create');
Route::get('/docentes/create', 'DocentesController@create');
//Route::get('/docentes', 'DocentesController@store');
Route::get('/docentes/{id}', 'DocentesController@show');
Route::get('/docentes', 'DocentesController@index');
Route::post('/docentes', 'DocentesController@store');

Route::post('/celulares/create', 'CelularesController@create');
Route::get('/celulares/create', 'CelularesController@create');
Route::get('/celulares/{id}', 'CelularesController@show');
Route::get('/celulares', 'CelularesController@index');
Route::post('/celulares', 'CelularesController@store');
