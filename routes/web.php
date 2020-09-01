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

Route::get('/developers/{id}/{email}', 'UserController@verify_mail');

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
Route::post('/manager/send_mail', 'ManagerController@send_mail')->middleware('auth');
Route::get('/manager/create_challenge', 'ManagerController@create_challenge')->middleware('auth');


// ******   DONACIONES  ******
Route::get('/donate', function(){
    return view('donate.donar');
});
Route::get('/pago-aprobado', function(){
    return view('donate.aprobado');
});
Route::get('/pago-rechazado', function(){
    return view('donate.rechazado');
});
Route::get('/pago-pendiente', function(){
    return view('donate.pendiente');
});

Route::post('/ipn', function(){
    $vari = new stdClass();
    $vari->topic = $_REQUEST['topic'];
    $vari->id = $_REQUEST['id'];
    $jsonvari = json_encode($vari);
    file_put_contents("data.txt", $jsonvari);
    return response($jsonvari,201);
});


