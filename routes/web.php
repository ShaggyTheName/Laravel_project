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


Route::get('/test', function () {
    echo 'HaliHalo!';
});
/*
Route::get('/messages', function () {
    return view('messages');
});
/*/
Route::post('/create', 'MessageController@create');
Route::get('/messages', 'MessageController@showAll');
Route::get('/message/{id}', 'MessageController@view');
Route::delete('/message/{id}', 'MessageController@delete');


