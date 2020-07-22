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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/developers', 'UserController@index');

Route::post('/developers/{id}','UserController@store_perfil')->middleware('auth');

Route::get('/info', 'InfoController@index');

Route::get('/extras', 'ExtrasController@index');

Route::get('/comments', 'CommentController@index');

Route::post('/comments', 'CommentController@store');

Route::put('/comments/{id}', 'CommentController@update_like');

Route::get('/recursos', 'ResController@index');

Route::resource('/clasificados', 'ClasificadosController');

Route::resource('/desafios', 'DesafiosController');

Route::get('/childcomments/{id}', 'ChildRespController@index');

Route::post('/childcomments/{id}', 'ChildRespController@store');

Route::get('/perfil', 'UserController@show')->middleware('auth');

// ************ manager routes ************

Route::get('/manager', 'ManagerController@index')->middleware('auth');
Route::get('/manager/mails', 'ManagerController@mails')->middleware('auth');



