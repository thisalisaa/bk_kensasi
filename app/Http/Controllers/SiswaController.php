<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // Contoh: Tambahkan dd() untuk memeriksa
public function index() {
    //dd('SiswaController@index accessed.');
    // ... logika lainnya
    return view('siswa.index');
}
}
