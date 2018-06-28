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
    //return view('welcome');
    return view('layouts.general');
});

// Roles de usuario.
Route::resource('roles', 'RolController');

// Docentes.
Route::resource('docentes', 'DocenteController');

// Usuarios.
Route::resource('users', 'UserController');

// Materias.
Route::resource('materias', 'MateriaController');

//Nivel Educativo
Route::resource('nivel', 'NivelEducativoController');