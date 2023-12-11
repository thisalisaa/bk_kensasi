<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\support\DB;

class InformasiController extends Controller
{
    public function index()
    {
        $informasi = Informasi::latest()->paginate(5);

        return view('informasi.admin',compact('informasi'))
            ->with('i', (request()->input('page',1)-1)*5);
    }

    public function create()
    {
        return view('informasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_informasi' => 'required',
            'pembuat' => 'required',
            'tanggal_informasi',
            'isi_informasi' => 'required',
        ]);

        $data = $request->all();

        // Cek apakah ada file gambar diinputkan
        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'image|mimes:jpeg,png,jpg',
            ]);

            $imageName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('gambar'), $imageName);
            $data['foto'] = $imageName;
        }

        Informasi::create($data);

        return redirect()->route('informasi.index')
        ->with('success', 'Informasi created successfully.')
        ->with('popup', true); // Tambahkan flag popup
    }

    public function show(Informasi $informasi)
    {
        return view('tampilan.tampilan',compact('informasi'));
        
    }

    public function edit($id)
    {
        $info = Informasi::find($id);
        return view('informasi.edit', compact('info'));
    }

    public function update(Request $request, Informasi $informasi)
    {
        $request->validate([
            'judul_informasi' => 'required',
            'pembuat' => 'required',
            'tanggal_informasi',
            'isi_informasi' => 'required',
        ]);

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'image|mimes:jpeg,png,jpg',
        ]);

        $imageName = time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('gambar'), $imageName);

        if ($request->old_foto) {
            unlink(public_path('gambar/' . $request->old_foto));
        }

        $informasi->foto = $imageName;
        } else {
        $informasi->foto = $request->old_foto;
        }

        $informasi->update($request->all());

        return redirect()->route('informasi.index')
        ->with('success', 'Informasi created successfully.')
        ->with('popup', true); // Tambahkan flag popup
        }

    public function destroy(Informasi $informasi)
    {
        $informasi->delete();

        return redirect()->route('informasi.index')
        ->with('success', 'Informasi created successfully.')
        ->with('popup', true); // Tambahkan flag popup
    }
}
