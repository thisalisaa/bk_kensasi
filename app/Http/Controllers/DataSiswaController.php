<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DataSiswaController extends Controller
{
    public function index()
    {
        $datasiswa = DataSiswa::latest()->paginate(5);

        return view('datasiswa.index', compact('datasiswa'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('datasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jk' => 'required',
            'ttl' => 'required',
            'agama' => 'required',
            'bahasa' => 'required',
            'anak_ke' => 'required',
            'jumlah_saudara' => 'required',
            'alamat_siswa' => 'required',
            'no_telepon' => 'required',
            'tinggal_dengan' => 'required',
            'jarak_kesekolah' => 'required',
            'kendaraan' => 'required',
            'asal_sekolah' => 'required',
            'bb' => 'required',
            'tb' => 'required',
            'gol_darah' => 'required',
            'riwayat_penyakit' => 'required',
            'foto_siswa' => 'image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto_siswa')) {
            $imageName = time().'.'.$request->foto_siswa->extension();
            $request->foto_siswa->move(public_path('fotosiswa'), $imageName);
            $data['foto_siswa'] = $imageName;
        }

        DataSiswa::create($data);

        return redirect()->route('datasiswa.index')->with('success', 'Data Siswa berhasil dibuat.');
    }

    public function show(DataSiswa $datasiswa)
    {
        return view('datasiswa.show', compact('datasiswa'));
    }

    public function edit(DataSiswa $datasiswa)
    {
        return view('datasiswa.edit', compact('datasiswa'));
    }

    public function update(Request $request, DataSiswa $datasiswa)
    {
        $request->validate([
            'nisn' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jk' => 'required',
            'ttl' => 'required',
            'agama' => 'required',
            'bahasa' => 'required',
            'anak_ke' => 'required',
            'jumlah_saudara' => 'required',
            'alamat_siswa' => 'required',
            'no_telepon' => 'required',
            'tinggal_dengan' => 'required',
            'jarak_kesekolah' => 'required',
            'kendaraan' => 'required',
            'asal_sekolah' => 'required',
            'bb' => 'required',
            'tb' => 'required',
            'gol_darah' => 'required',
            'riwayat_penyakit' => 'required',
        ]);

        $datasiswa->update($request->all());

        return redirect()->route('datasiswa.index')->with('success', 'Data siswa updated successfully');
    }

    public function destroy(DataSiswa $datasiswa)
    {
        $datasiswa->delete();

        return redirect()->route('datasiswa.index')->with('success', 'Data siswa deleted successfully');
    }
}
