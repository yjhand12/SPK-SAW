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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')
    ->namespace('Admin')
    //->middleware('auth')
    ->group(function() {
        Route::get('/', 'DashboardController@index')->name('admin-dashboard');
        Route::resource('mahasiswa', 'MahasiswaController');
        Route::resource('kriteria', 'KriteriaController');
        Route::resource('sub-kriteria', 'SubKriteriaController');
        Route::get('/nilai/get-nama', 'NilaiController@getNama')->name('nilai.getNama');
        Route::resource('nilai', 'NilaiController');
    });

    


