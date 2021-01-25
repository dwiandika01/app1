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

// Route::get('/', function () {
//     return view('auth.login');
// });

// Route::get('/register', 'UserController@register')->name('register');
// Route::get('/login', 'UserController@login')->name('login');

Route::get('/', 'AuthController@showFormLogin')->name('login');
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');

Route::group(['middleware' => 'auth'], function () {

    //Route::get('home', 'UserController@home')->name('home');
    Route::get('/beranda', 'UserController@beranda')->name('beranda');

    // Contact    
    // Route::get('/contact', 'ContactController@index')->name('contact');
    // Route::get('/contact/create', 'ContactController@create');
    // Route::post('/contact/store', 'ContactController@store');
    // Route::get('/contact/{id}/edit', 'ContactController@edit');
    // Route::patch('/contact/{id}', 'ContactController@update');

    /** Admin Route */
    Route::get('/admin', 'DashboardController@index')->name('home');
    Route::post('/admin/postlogin', 'AuthController@postlogin');
    //Route Kandidat
    Route::get('/admin/kandidat', 'KandidatController@index')->name('admin.kandidat');
    Route::get('/admin/kandidat/tambah', 'KandidatController@tambah')->name('admin.kandidat.tambah');
    Route::get('/admin/kandidat/detail/{id}', 'KandidatController@detail')->name('admin.kandidat.detail');
    Route::get('/admin/kandidat/edit/{id}', 'KandidatController@edit')->name('admin.kandidat.edit');
    Route::post('/admin/kandidat/update/{id}', 'KandidatController@update')->name('admin.kandidat.update');
    Route::get('/admin/kandidat/hapus/{id}', 'KandidatController@hapus')->name('admin.kandidat.hapus');
    Route::post('/admin/kandidat/store', 'KandidatController@store')->name('admin.kandidat.store');
    //Route Voters
    Route::get('/admin/voters', 'VotersController@index')->name('admin.voters');
    Route::get('/admin/voters/tambah', 'VotersController@tambah')->name('admin.voters.tambah');
    Route::post('/admin/voters/store', 'VotersController@store')->name('admin.voters.store');
    Route::get('/admin/voters/hapus', 'VotersController@hapus')->name('admin.voters.hapus');
    Route::post('/admin/voters/delete', 'VotersController@delete')->name('admin.voters.delete');
    Route::post('/admin/voters/cari', 'VotersController@cari')->name('admin.voters.cari');
    Route::get('/admin/voters/export_excel', 'VotersController@export_excel')->name('admin.voters.export_excel');

    Route::get('logout', 'AuthController@logout')->name('logout');
});
