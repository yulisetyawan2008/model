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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
    return view('home');
});

Route::get('/jawaban', 'JawabanController@index');
Route::get('/jawaban/create', 'JawabanController@create');
Route::post('/jawaban', 'JawabanController@jawaban');

Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@pertanyaan');
