<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller 
{
    public function getDataSiswa() {
        return view('biodata.data-siswa');
    }
    
    public function getOrangTua() {
        return view('biodata.orang-tua');
    }
    
    public function getKeteranganLain() {
        return view('biodata.keterangan-lain');
    }
    
    public function getUnduhData() {
        return view('biodata.unduh-data');
    }
}
