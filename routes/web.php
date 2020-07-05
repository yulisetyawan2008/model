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


Route::get('/jawaban/create', 'JawabanController@create');
Route::post('/jawaban', 'JawabanController@jawaban');
Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index'); // menampilkan jawaban dari pertanyaan id
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store'); // menyimpan jawaban

Route::get('/pertanyaan', 'PertanyaanController@index'); // menampilkan semua
Route::get('/pertanyaan/create', 'PertanyaanController@create'); // menampilkan halaman form
Route::post('/pertanyaan', 'PertanyaanController@store'); // menyimpan data
Route::get('/pertanyaan/{id}', 'PertanyaanController@show'); // menampilkan detail pertanyaan dengan id
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');// menampilkan form untuk edit item
Route::put('/pertanyaan/{id}', 'PertanyaanController@update'); // menyimpan perubahan dari form edit
Route::delete('/pertanyaan/{id}', 'PertanyaanController@destroy'); // menghapus data dengan id