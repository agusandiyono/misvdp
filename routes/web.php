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
Route::resource('/', 'Frontend\BerandaController');
Route::get('/poktan', 'Frontend\BerandaController@poktan')->name('poktan');
Route::get('/dampingan', 'Frontend\BerandaController@dampingan')->name('dampingan');
Route::get('/berita', 'Frontend\BerandaController@berita')->name('berita');
Route::get('/poktanDesa/{id}', 'Frontend\BerandaController@poktanDesa')->name('poktanDesa');
Route::get('/poktanDetail/{id}', 'Frontend\BerandaController@poktanDetail')->name('poktanDetail');



Route::group( ['prefix' => 'tim'], function() {     
    Route::get('/konsultan', 'Frontend\BerandaController@konsultan');
    Route::get('/detail-tim/{id}', 'Frontend\BerandaController@detailTim')->name('detail-tim');
});
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group( ['prefix' => 'admin',  'middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('posts', 'PostController');
    Route::resource('iku', 'IkuController');
    Route::resource('poktan', 'PoktanController');
    Route::resource('kegiatan', 'KegiatanController');
    Route::resource('dampingan', 'DampinganController');
    Route::resource('tim', 'TimController');
    Route::resource('evkin', 'EvkinController');
    Route::get('/poktan/evkin/{id}/tambah', 'EvkinController@tambah')->name('evkin.tambah'); 
    Route::get('/poktan/poktanDesa/{id}', 'PoktanController@poktanDesa')->name('poktan.poktanDesa'); 
    Route::get('/poktan/evkinExcel', 'PoktanController@evkinExcel')->name('poktan.evkinExcel'); 

});




// Route untuk validasi registrasi user
Route::get('/verify/token/{token}', 'Auth\VerificationController@verify')->name('auth.verify'); 
Route::get('/verify/resend', 'Auth\VerificationController@resend')->name('auth.verify.resend');
Route::get('/user/getdata', 'UserController@getData')->name('user/getdata');

// Route untuk chained combobox
Route::get('/json-kabupaten','WilayahController@kabupaten');
Route::get('/json-kecamatan','WilayahController@kecamatan');
Route::get('/json-desa','WilayahController@desa');

Route::get('users/export', 'UserController@export')->name('users/export');



