<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class Biodata1Controller extends Controller 
{
    public function index() {
        // Mengambil semua data siswa
    $users = User::all();

    // Mengirim data siswa ke view
    return view('biodata1.data-siswa', compact('users'));
    }

    public function edit($id)
{
    $user = User::findOrFail($id);
    return view('biodata1.perbarui-data', compact('user'));
}

public function update(Request $request, $id)
{
    $user = User::findOrFail($id);
    $user->update($request->all());
    
    // Redirect setelah update data
    return redirect()->route('biodata1.index');
}

    public function getDataSiswa() {
        return view('biodata1.data-siswa');
    }
    
    public function getOrangTua() {
        return view('biodata1.orang-tua');
    }
    
    public function getKeteranganLain() {
        return view('biodata1.keterangan-lain');
    }

    public function getUnduhData() {
        return view('biodata1.unduh-data');
    }
}
