<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananMasalahController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\RegisterController;


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

Route::resource('/layanan', LayananMasalahController::class);

Route::get('/register',[LoginControoler::class,'register'])->name('register');

Route::get('/beranda',function(){
    return view('beranda/index');
});


//datasiswa
Route::resource('datasiswa', DataSiswaController::class);

// Rute untuk login
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'dologin']);
});

// Rute untuk logout
Route::middleware(['auth', 'checkrole:1,2,3'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::any('/redirect', [RedirectController::class, 'cek']);
});

// Rute untuk superadmin
Route::middleware(['auth', 'checkrole:1'])->group(function () {
    Route::get('/superadmin', [SuperadminController::class, 'index']);
});

// Rute untuk guru
Route::middleware(['auth', 'checkrole:2'])->group(function () {
    Route::get('/guru', [GuruController::class, 'index']);
});

// Rute untuk siswa
Route::middleware(['auth', 'checkrole:3'])->group(function () {
    Route::get('/siswa', [SiswaController::class, 'index']);
});

// Rute untuk registrasi
Route::middleware(['web', 'guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'showForm'])->name('register.form');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.process');
});
