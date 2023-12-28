<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biodata1Controller extends Controller 
{
    public function getDataSiswa() {
        return view('biodata1.data-siswa');
    }
    
    public function getOrangTua() {
        return view('biodata1.orang-tua');
    }
    
    public function getKeteranganLain() {
        return view('biodata1.keterangan-lain');
    }

    public function update() {
        return view('biodata1.perbarui-data');
    }
    
    public function getUnduhData() {
        return view('biodata1.unduh-data');
    }
}
