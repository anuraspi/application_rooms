<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Rute untuk login
Route::post('login', 'LoginController@login')->name('login');

// Rute untuk masing-masing opsi login
Route::get('login/mahasiswa', 'Auth\LoginController@showMahasiswaLoginForm')->name('login.mahasiswa');
Route::get('login/staff', 'Auth\LoginController@showStaffLoginForm')->name('login.staff');
Route::get('login/dosen', 'Auth\LoginController@showDosenLoginForm')->name('login.dosen');
