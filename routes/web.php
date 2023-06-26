<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

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

Route::get('404', 'Error404Controller@index')->name('404');

Route::get('/', function () {
    return redirect ('login');
});

Route::middleware(['auth'])->group(function(){
    Route::get('home', 'HomeController@index')->name('home');
});


Route::middleware(['guest'])->group(function(){
    Route::get('login', 'UserController@index')->name('login');
    Route::post('login', 'UserController@login')->name('cek-login');
    Route::post('register', 'UserController@create')->name('register');
    Route::get('register', 'UserController@register');
});

Route::post('logout', 'UserController@logout')->name('logout');


Route::prefix('admin')->namespace('Admin')->middleware(['auth','admin'])->group(function() {        
    Route::get('/', 'DashboardController@index')->name('admin-dashboard');
    Route::resource('mahasiswa', 'MahasiswaController');
    Route::resource('kriteria', 'KriteriaController');
    Route::resource('sub-kriteria', 'SubKriteriaController');
    Route::get('/nilai/get-nama', 'NilaiController@getNama')->name('nilai.getNama');
    Route::resource('nilai', 'NilaiController');
    Route::resource('hasil', 'HasilController');
});