<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananMasalahController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\InformasiController; 
use App\Http\Controllers\Biodata1Controller;  
use App\Http\Controllers\BiodataController; 
use App\Http\Controllers\KeteranganLainController; 
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RedirectController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\AyahController;
use App\Http\Controllers\IbuController;


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

Route::get('/beranda',function(){
    return view('beranda/index');
});
Route::get('/beranda1',function(){
    return view('beranda/index1');
});
Route::get('/bk_kensasi',function(){
    return view('landingpage/index');
});


//Rute untuk crud admin informasi
Route::resource('/informasi', InformasiController::class);
//tampilan informasi untuk siswa
Route::get('/user-informasi', [InformasiController::class, 'userIndex'])->name('user.informasi.index');
//tampilan biodata
Route::middleware(['auth', 'checkrole:3'])->group(function () {
    Route::get('/biodata/data-siswa', [Biodata1Controller::class, 'getDataSiswa']);
    Route::get('/biodata/orang-tua', [Biodata1Controller::class, 'getOrangTua']);
    Route::get('/biodata/keterangan-lain', [Biodata1Controller::class, 'getKeteranganLain']);
    Route::get('/biodata1', [Biodata1Controller::class, 'index'])->name('biodata1.index');
    Route::get('/edit-biodata/{id}', [Biodata1Controller::class, 'edit'])->name('biodata1.edit');
    Route::put('/biodata/{id}', [Biodata1Controller::class, 'update'])->name('biodata.update');
    Route::get('/biodata/unduh-data', [Biodata1Controller::class, 'getUnduhData']);
});

// Rute untuk data siswa
Route::resource('datasiswa', DataSiswaController::class);

// Rute untuk login
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'dologin']);
});

// Rute untuk logout
Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::any('/redirect', [RedirectController::class, 'cek']);
});

Route::middleware(['auth', 'checkrole:1'])->group(function () {
    Route::get('/superadmin', [SuperadminController::class, 'index'])->name('superadmin.index');
});

Route::middleware(['auth', 'checkrole:2'])->group(function () {
    Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
});

Route::middleware(['auth', 'checkrole:3'])->group(function () {
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
});


// Rute registrasi
Route::middleware(['web', 'guest'])->group(function () {
    // Tampilkan formulir registrasi
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');

    // Proses formulir registrasi
    Route::post('/register', [RegisterController::class, 'register'])->name('register.process');
});

// Rute lupa password
Route::middleware(['web', 'guest'])->group(function () {
    Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
});

// Rute reset password
Route::middleware(['web', 'guest'])->group(function () {
    Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
});


//route layanan dan keterangan lain
Route::resource('/layanan', LayananMasalahController::class);

Route::resource('/keteranganlain', KeteranganLainController::class);

//route beranda
Route::get('/beranda',function(){
    return view('beranda/index');
});

//route unduh biodata
Route::get('/biodata/cetak_pdf', [BiodataController::class,'cetak_pdf']);
Route::get('/biodata', [BiodataController::class, 'biodata']);

//route home
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify' => true]);

// Ayah routes
Route::get('/ayah', [AyahController::class, 'index'])->name('ayah.index');
Route::get('/ayah/create', [AyahController::class, 'create'])->name('ayah.create');
Route::post('/ayah/store', [AyahController::class, 'store'])->name('ayah.store');
Route::get('/ayah/{ayah}/edit', [AyahController::class, 'edit'])->name('ayah.edit');
Route::put('/ayah/{ayah}/update', [AyahController::class, 'update'])->name('ayah.update');
Route::delete('/ayah/{ayah}/destroy', [AyahController::class, 'destroy'])->name('ayah.destroy');

// Ibu routes
Route::get('/ibu', [IbuController::class, 'index'])->name('ibu.index');
Route::get('/ibu/create', [IbuController::class, 'create'])->name('ibu.create');
Route::post('/ibu/store', [IbuController::class, 'store'])->name('ibu.store');
Route::get('/ibu/{ibu}/edit', [IbuController::class, 'edit'])->name('ibu.edit');
Route::put('/ibu/{ibu}/update', [IbuController::class, 'update'])->name('ibu.update');
Route::delete('/ibu/{ibu}/destroy', [IbuController::class, 'destroy'])->name('ibu.destroy');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
