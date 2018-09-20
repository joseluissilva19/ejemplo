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

Route::get('/inicio', function () {
    return view('bienvenida');
});

Route::resource('/materia', 'MateriaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/materias', 'MateriaController@index');

Route::get('/dependencia', 'DependenciaController@index');

Route::get('/materia/create', function(){
  return view('materias.formMateria');
});

Route::get('/materia/show', function(){
  return view('materias.showMateria');
});